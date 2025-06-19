import React, { useState, useEffect } from 'react';
import {
  View,
  StyleSheet,
  ScrollView,
  Alert,
  RefreshControl,
} from 'react-native';
import {
  Card,
  Title,
  Paragraph,
  Button,
  Chip,
  List,
  Switch,
  TextInput,
  Modal,
  Portal,
  ActivityIndicator,
  Snackbar,
  Surface,
  Divider,
} from 'react-native-paper';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Ionicons } from '@expo/vector-icons';

import { ApiService } from '../services/ApiService';
import { theme, styles } from '../theme/theme';

export default function VisitDetailScreen({ route, navigation }) {
  const { visit: initialVisit } = route.params;
  
  const [visit, setVisit] = useState(initialVisit);
  const [visitors, setVisitors] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [isRefreshing, setIsRefreshing] = useState(false);
  const [selectedVisitor, setSelectedVisitor] = useState(null);
  const [visitorComment, setVisitorComment] = useState('');
  const [modalVisible, setModalVisible] = useState(false);
  const [closeModalVisible, setCloseModalVisible] = useState(false);
  const [generalComment, setGeneralComment] = useState('');
  const [snackbarVisible, setSnackbarVisible] = useState(false);
  const [snackbarMessage, setSnackbarMessage] = useState('');
  const [isUpdating, setIsUpdating] = useState(false);

  useEffect(() => {
    loadVisitDetails();
  }, []);

  const loadVisitDetails = async (isRefresh = false) => {
    if (isRefresh) {
      setIsRefreshing(true);
    } else {
      setIsLoading(true);
    }

    try {
      const visitData = await ApiService.getVisitDetails(visit.id);
      setVisit(visitData);
      setVisitors(visitData.visiteurs || []);
    } catch (error) {
      showSnackbar('Erreur lors du chargement des détails');
      console.error('Erreur chargement détails visite:', error);
    } finally {
      setIsLoading(false);
      setIsRefreshing(false);
    }
  };

  const handlePresenceToggle = async (visitor, isPresent) => {
    if (!isPresent) {
      // Si on marque absent, on peut directement sauvegarder
      await updateVisitorPresence(visitor, false, '');
    } else {
      // Si on marque présent, ouvrir le modal pour un commentaire optionnel
      setSelectedVisitor(visitor);
      setVisitorComment(visitor.commentaire || '');
      setModalVisible(true);
    }
  };

  const updateVisitorPresence = async (visitor, isPresent, comment = '') => {
    setIsUpdating(true);
    try {
      await ApiService.updateVisitorPresence(visitor.id, isPresent, comment);
      
      // Mettre à jour localement
      setVisitors(prevVisitors =>
        prevVisitors.map(v =>
          v.id === visitor.id
            ? { ...v, present: isPresent, commentaire: comment }
            : v
        )
      );
      
      showSnackbar(
        isPresent 
          ? `${visitor.nom} marqué présent` 
          : `${visitor.nom} marqué absent`
      );
    } catch (error) {
      showSnackbar('Erreur lors de la mise à jour');
      console.error('Erreur mise à jour présence:', error);
    } finally {
      setIsUpdating(false);
    }
  };

  const handleSaveComment = async () => {
    if (selectedVisitor) {
      await updateVisitorPresence(selectedVisitor, true, visitorComment);
      setModalVisible(false);
      setSelectedVisitor(null);
      setVisitorComment('');
    }
  };

  const handleStartVisit = async () => {
    Alert.alert(
      'Démarrer la visite',
      'Voulez-vous marquer cette visite comme commencée ?',
      [
        { text: 'Annuler', style: 'cancel' },
        {
          text: 'Démarrer',
          onPress: async () => {
            try {
              setIsUpdating(true);
              await ApiService.startVisit(visit.id);
              setVisit(prev => ({ ...prev, statut: 'en_cours' }));
              showSnackbar('Visite démarrée');
            } catch (error) {
              showSnackbar('Erreur lors du démarrage');
            } finally {
              setIsUpdating(false);
            }
          },
        },
      ]
    );
  };

  const handleCloseVisit = () => {
    setGeneralComment('');
    setCloseModalVisible(true);
  };

  const confirmCloseVisit = async () => {
    try {
      setIsUpdating(true);
      await ApiService.closeVisit(visit.id, generalComment);
      setVisit(prev => ({ 
        ...prev, 
        statut: 'terminée',
        commentaire_general: generalComment 
      }));
      setCloseModalVisible(false);
      showSnackbar('Visite clôturée avec succès');
    } catch (error) {
      showSnackbar('Erreur lors de la clôture');
    } finally {
      setIsUpdating(false);
    }
  };

  const showSnackbar = (message) => {
    setSnackbarMessage(message);
    setSnackbarVisible(true);
  };

  const getStatusColor = (status) => {
    switch (status) {
      case 'programmée':
        return theme.colors.info;
      case 'en_cours':
        return theme.colors.warning;
      case 'terminée':
        return theme.colors.success;
      default:
        return theme.colors.disabled;
    }
  };

  const getStatusLabel = (status) => {
    switch (status) {
      case 'programmée':
        return 'À venir';
      case 'en_cours':
        return 'En cours';
      case 'terminée':
        return 'Terminée';
      default:
        return status;
    }
  };

  const formatDateTime = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleString('fr-FR', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
    });
  };

  const presentCount = visitors.filter(v => v.present).length;
  const totalCount = visitors.length;

  if (isLoading) {
    return (
      <SafeAreaView style={styles.container}>
        <View style={localStyles.loadingContainer}>
          <ActivityIndicator size="large" color={theme.colors.primary} />
          <Paragraph style={localStyles.loadingText}>
            Chargement des détails...
          </Paragraph>
        </View>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={styles.container}>
      <ScrollView
        style={styles.contentContainer}
        refreshControl={
          <RefreshControl
            refreshing={isRefreshing}
            onRefresh={() => loadVisitDetails(true)}
            colors={[theme.colors.primary]}
          />
        }
      >
        {/* En-tête de la visite */}
        <Card style={[styles.card, localStyles.headerCard]}>
          <Card.Content>
            <View style={localStyles.headerContent}>
              <Title style={localStyles.visitTitle}>{visit.titre}</Title>
              <Chip
                style={[localStyles.statusChip, { backgroundColor: getStatusColor(visit.statut) }]}
                textStyle={{ color: '#FFFFFF' }}
              >
                {getStatusLabel(visit.statut)}
              </Chip>
            </View>

            <View style={localStyles.visitInfo}>
              <View style={localStyles.infoRow}>
                <Ionicons name="calendar" size={18} color={theme.colors.primary} />
                <Paragraph style={localStyles.infoText}>
                  {formatDateTime(visit.date_visite)}
                </Paragraph>
              </View>

              {visit.lieu && (
                <View style={localStyles.infoRow}>
                  <Ionicons name="location" size={18} color={theme.colors.primary} />
                  <Paragraph style={localStyles.infoText}>{visit.lieu}</Paragraph>
                </View>
              )}

              {visit.description && (
                <View style={localStyles.infoRow}>
                  <Ionicons name="document-text" size={18} color={theme.colors.primary} />
                  <Paragraph style={localStyles.infoText}>{visit.description}</Paragraph>
                </View>
              )}
            </View>
          </Card.Content>
        </Card>

        {/* Statistiques de présence */}
        <Card style={[styles.card, localStyles.statsCard]}>
          <Card.Content>
            <Title style={localStyles.sectionTitle}>Présences</Title>
            <View style={localStyles.statsRow}>
              <View style={localStyles.statItem}>
                <Title style={[localStyles.statNumber, { color: theme.colors.success }]}>
                  {presentCount}
                </Title>
                <Paragraph style={localStyles.statLabel}>Présents</Paragraph>
              </View>
              <View style={localStyles.statItem}>
                <Title style={[localStyles.statNumber, { color: theme.colors.error }]}>
                  {totalCount - presentCount}
                </Title>
                <Paragraph style={localStyles.statLabel}>Absents</Paragraph>
              </View>
              <View style={localStyles.statItem}>
                <Title style={localStyles.statNumber}>{totalCount}</Title>
                <Paragraph style={localStyles.statLabel}>Total</Paragraph>
              </View>
            </View>
          </Card.Content>
        </Card>

        {/* Liste des visiteurs */}
        <Card style={styles.card}>
          <Card.Content>
            <Title style={localStyles.sectionTitle}>Liste des visiteurs</Title>
            {visitors.length === 0 ? (
              <View style={localStyles.emptyVisitors}>
                <Ionicons name="people-outline" size={60} color={theme.colors.disabled} />
                <Paragraph style={localStyles.emptyText}>
                  Aucun visiteur inscrit
                </Paragraph>
              </View>
            ) : (
              visitors.map((visitor, index) => (
                <View key={visitor.id}>
                  <List.Item
                    title={`${visitor.prenom} ${visitor.nom}`}
                    description={visitor.email}
                    left={(props) => (
                      <List.Icon
                        {...props}
                        icon={visitor.present ? "account-check" : "account"}
                        color={visitor.present ? theme.colors.success : theme.colors.disabled}
                      />
                    )}
                    right={() => (
                      <View style={localStyles.presenceContainer}>
                        <Switch
                          value={visitor.present || false}
                          onValueChange={(value) => handlePresenceToggle(visitor, value)}
                          disabled={visit.statut === 'terminée' || isUpdating}
                        />
                      </View>
                    )}
                    style={localStyles.visitorItem}
                  />
                  {visitor.commentaire && (
                    <View style={localStyles.commentContainer}>
                      <Paragraph style={localStyles.comment}>
                        💬 {visitor.commentaire}
                      </Paragraph>
                    </View>
                  )}
                  {index < visitors.length - 1 && <Divider />}
                </View>
              ))
            )}
          </Card.Content>
        </Card>

        {/* Actions */}
        <View style={localStyles.actionsContainer}>
          {visit.statut === 'programmée' && (
            <Button
              mode="contained"
              onPress={handleStartVisit}
              style={[localStyles.actionButton, { backgroundColor: theme.colors.warning }]}
              disabled={isUpdating}
              loading={isUpdating}
            >
              Démarrer la visite
            </Button>
          )}

          {visit.statut === 'en_cours' && (
            <Button
              mode="contained"
              onPress={handleCloseVisit}
              style={[localStyles.actionButton, { backgroundColor: theme.colors.success }]}
              disabled={isUpdating}
            >
              Clôturer la visite
            </Button>
          )}
        </View>

        {/* Commentaire général (si visite terminée) */}
        {visit.statut === 'terminée' && visit.commentaire_general && (
          <Card style={styles.card}>
            <Card.Content>
              <Title style={localStyles.sectionTitle}>Commentaire général</Title>
              <Paragraph style={localStyles.generalComment}>
                {visit.commentaire_general}
              </Paragraph>
            </Card.Content>
          </Card>
        )}
      </ScrollView>

      {/* Modal pour commentaire visiteur */}
      <Portal>
        <Modal
          visible={modalVisible}
          onDismiss={() => setModalVisible(false)}
          contentContainerStyle={localStyles.modalContainer}
        >
          <Title style={localStyles.modalTitle}>
            Commentaire pour {selectedVisitor?.prenom} {selectedVisitor?.nom}
          </Title>
          <TextInput
            label="Commentaire (optionnel)"
            value={visitorComment}
            onChangeText={setVisitorComment}
            mode="outlined"
            multiline
            numberOfLines={4}
            style={localStyles.commentInput}
          />
          <View style={localStyles.modalActions}>
            <Button onPress={() => setModalVisible(false)}>
              Annuler
            </Button>
            <Button
              mode="contained"
              onPress={handleSaveComment}
              loading={isUpdating}
            >
              Confirmer
            </Button>
          </View>
        </Modal>
      </Portal>

      {/* Modal pour clôture de visite */}
      <Portal>
        <Modal
          visible={closeModalVisible}
          onDismiss={() => setCloseModalVisible(false)}
          contentContainerStyle={localStyles.modalContainer}
        >
          <Title style={localStyles.modalTitle}>Clôturer la visite</Title>
          <Paragraph style={localStyles.modalDescription}>
            Ajoutez un commentaire général sur cette visite :
          </Paragraph>
          <TextInput
            label="Commentaire général"
            value={generalComment}
            onChangeText={setGeneralComment}
            mode="outlined"
            multiline
            numberOfLines={4}
            style={localStyles.commentInput}
          />
          <View style={localStyles.modalActions}>
            <Button onPress={() => setCloseModalVisible(false)}>
              Annuler
            </Button>
            <Button
              mode="contained"
              onPress={confirmCloseVisit}
              loading={isUpdating}
            >
              Clôturer
            </Button>
          </View>
        </Modal>
      </Portal>

      <Snackbar
        visible={snackbarVisible}
        onDismiss={() => setSnackbarVisible(false)}
        duration={3000}
      >
        {snackbarMessage}
      </Snackbar>
    </SafeAreaView>
  );
}

const localStyles = StyleSheet.create({
  loadingContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  loadingText: {
    marginTop: 16,
    color: theme.colors.disabled,
  },
  headerCard: {
    marginBottom: 12,
  },
  headerContent: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'flex-start',
    marginBottom: 16,
  },
  visitTitle: {
    fontSize: 20,
    fontWeight: 'bold',
    flex: 1,
    marginRight: 12,
  },
  statusChip: {
    height: 32,
  },
  visitInfo: {
    marginTop: 8,
  },
  infoRow: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 8,
  },
  infoText: {
    marginLeft: 12,
    fontSize: 14,
    flex: 1,
  },
  statsCard: {
    marginBottom: 12,
  },
  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 12,
  },
  statsRow: {
    flexDirection: 'row',
    justifyContent: 'space-around',
    marginTop: 8,
  },
  statItem: {
    alignItems: 'center',
  },
  statNumber: {
    fontSize: 24,
    fontWeight: 'bold',
  },
  statLabel: {
    fontSize: 12,
    color: theme.colors.disabled,
    marginTop: 4,
  },
  emptyVisitors: {
    alignItems: 'center',
    paddingVertical: 40,
  },
  emptyText: {
    marginTop: 16,
    color: theme.colors.disabled,
    textAlign: 'center',
  },
  visitorItem: {
    paddingVertical: 8,
  },
  presenceContainer: {
    justifyContent: 'center',
  },
  commentContainer: {
    paddingLeft: 16,
    paddingRight: 16,
    paddingBottom: 8,
  },
  comment: {
    fontSize: 12,
    fontStyle: 'italic',
    color: theme.colors.primary,
    backgroundColor: theme.colors.surface,
    padding: 8,
    borderRadius: 4,
  },
  actionsContainer: {
    marginVertical: 16,
  },
  actionButton: {
    marginVertical: 8,
    paddingVertical: 8,
  },
  generalComment: {
    fontSize: 14,
    lineHeight: 20,
    backgroundColor: theme.colors.surface,
    padding: 12,
    borderRadius: 8,
    borderLeftWidth: 4,
    borderLeftColor: theme.colors.primary,
  },
  modalContainer: {
    backgroundColor: 'white',
    padding: 20,
    margin: 20,
    borderRadius: 8,
  },
  modalTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 8,
  },
  modalDescription: {
    marginBottom: 16,
    color: theme.colors.disabled,
  },
  commentInput: {
    marginBottom: 20,
  },
  modalActions: {
    flexDirection: 'row',
    justifyContent: 'flex-end',
    gap: 12,
  },
});