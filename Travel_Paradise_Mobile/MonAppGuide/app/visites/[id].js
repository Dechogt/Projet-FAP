// app/visites/[id].js - PAGE DE DÉTAILS DE VISITE MODERNE
import React, { useState, useEffect } from 'react';
import { 
  View, 
  Text, 
  StyleSheet, 
  FlatList, 
  TextInput, 
  Alert, 
  ActivityIndicator, 
  TouchableOpacity, 
  SafeAreaView,
  ScrollView,
  StatusBar,
  Dimensions
} from 'react-native';
import axios from 'axios';
import { useRouter, useLocalSearchParams } from 'expo-router';

const { width } = Dimensions.get('window');

const VisiteDetailScreen = () => {
  const { token, visiteId } = useLocalSearchParams();
  const router = useRouter();
  const [visite, setVisite] = useState(null);
  const [inscrits, setInscrits] = useState([]);
  const [loading, setLoading] = useState(true);
  const [saving, setSaving] = useState(false);
  const [commentaireGeneral, setCommentaireGeneral] = useState('');
  const [stats, setStats] = useState({ presents: 0, total: 0 });

  useEffect(() => {
    const fetchVisiteDetails = async () => {
      if (!token || !visiteId) {
        Alert.alert('Erreur', 'Informations manquantes pour charger les détails.');
        router.replace('/visites');
        return;
      }

      try {
        setLoading(true);
        const response = await axios.get(`http://192.168.0.228:8000/api/guide/visites/${visiteId}`, {
          headers: {
            'Authorization': `Bearer ${token}`,
          },
        });
        
        const visitData = response.data;
        setVisite(visitData);
        
        const inscritsList = visitData.inscrits.map(inscrit => ({
          ...inscrit,
          estPresent: false,
          commentaireInscrit: '',
        }));
        
        setInscrits(inscritsList);
        setCommentaireGeneral(visitData.commentaireGeneral || '');
        updateStats(inscritsList);
      } catch (error) {
        console.error('Erreur lors de la récupération des détails de la visite:', error.response?.data || error.message);
        if (error.response?.status === 401) {
          Alert.alert('Session expirée', 'Veuillez vous reconnecter.');
          router.replace('/login');
        } else {
          Alert.alert('Erreur', 'Impossible de charger les détails de la visite.');
          router.back();
        }
      } finally {
        setLoading(false);
      }
    };

    fetchVisiteDetails();
  }, [token, visiteId, router]);

  const updateStats = (inscritsList) => {
    const presents = inscritsList.filter(inscrit => inscrit.estPresent).length;
    setStats({ presents, total: inscritsList.length });
  };

  const togglePresence = (inscritId) => {
    const updatedInscrits = inscrits.map(inscrit =>
      inscrit.id === inscritId ? { ...inscrit, estPresent: !inscrit.estPresent } : inscrit
    );
    setInscrits(updatedInscrits);
    updateStats(updatedInscrits);
  };

  const updateCommentaireInscrit = (inscritId, text) => {
    setInscrits(currentInscrits =>
      currentInscrits.map(inscrit =>
        inscrit.id === inscritId ? { ...inscrit, commentaireInscrit: text } : inscrit
      )
    );
  };

  const handleFinVisite = async () => {
    if (!visite || !token || !visiteId) return;

    setSaving(true);
    const payload = {
      inscrits: inscrits.map(({ id, estPresent, commentaireInscrit }) => ({
        id,
        estPresent,
        commentaire: commentaireInscrit,
      })),
      commentaireGeneral: commentaireGeneral,
      statut: 'terminee',
    };

    try {
      await axios.post(`http://192.168.0.228:8000/api/guide/visites/${visiteId}/checkin`, payload, {
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
        },
      });
      
      Alert.alert(
        'Succès', 
        'La visite a été marquée comme terminée et les présences mises à jour.', 
        [{ text: 'OK', onPress: () => router.back() }]
      );
    } catch (error) {
      console.error('Erreur lors de la fin de visite:', error.response?.data || error.message);
      Alert.alert('Erreur', 'Impossible de terminer la visite. Veuillez réessayer.');
    } finally {
      setSaving(false);
    }
  };

  const renderInscritItem = ({ item, index }) => (
    <View style={[styles.inscritCard, { marginTop: index === 0 ? 0 : 12 }]}>
      <View style={styles.inscritHeader}>
        <View style={styles.inscritNameContainer}>
          <View style={[styles.avatarCircle, item.estPresent && styles.avatarPresent]}>
            <Text style={[styles.avatarText, item.estPresent && styles.avatarTextPresent]}>
              {(item.nom || 'I').charAt(0).toUpperCase()}
            </Text>
          </View>
          <View style={styles.inscritDetails}>
            <Text style={styles.inscritName}>{item.nom || 'Inscrit Inconnu'}</Text>
            <Text style={styles.inscritEmail}>{item.email || 'Email non disponible'}</Text>
          </View>
        </View>
        
        <TouchableOpacity 
          onPress={() => togglePresence(item.id)} 
          style={[styles.presenceButton, item.estPresent && styles.presenceButtonActive]}
        >
          <Text style={[styles.presenceButtonText, item.estPresent && styles.presenceButtonTextActive]}>
            {item.estPresent ? '✓ Présent' : 'Absent'}
          </Text>
        </TouchableOpacity>
      </View>
      
      <TextInput
        style={styles.commentaireInput}
        placeholder="Ajouter un commentaire pour cet inscrit..."
        value={item.commentaireInscrit}
        onChangeText={(text) => updateCommentaireInscrit(item.id, text)}
        multiline
        numberOfLines={2}
        placeholderTextColor="#9ca3af"
      />
    </View>
  );

  if (loading) {
    return (
      <SafeAreaView style={styles.container}>
        <StatusBar barStyle="dark-content" backgroundColor="#fafafa" />
        <View style={styles.loadingContainer}>
          <ActivityIndicator size="large" color="#5619e5" />
          <Text style={styles.loadingText}>Chargement des détails...</Text>
        </View>
      </SafeAreaView>
    );
  }

  if (!visite) {
    return (
      <SafeAreaView style={styles.container}>
        <StatusBar barStyle="dark-content" backgroundColor="#fafafa" />
        <View style={styles.errorContainer}>
          <Text style={styles.errorText}>Impossible de charger les détails de la visite.</Text>
          <TouchableOpacity style={styles.errorButton} onPress={() => router.back()}>
            <Text style={styles.errorButtonText}>Retour</Text>
          </TouchableOpacity>
        </View>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={styles.container}>
      <StatusBar barStyle="dark-content" backgroundColor="#fafafa" />
      
      {/* Header */}
      <View style={styles.header}>
        <Text style={styles.headerTitle}>Détails de la Visite</Text>
      </View>

      <ScrollView style={styles.scrollContainer} showsVerticalScrollIndicator={false}>
        {/* Info Card */}
        <View style={styles.infoCard}>
          <View style={styles.infoRow}>
            <View style={styles.infoItem}>
              <Text style={styles.infoLabel}>📍 Lieu</Text>
              <Text style={styles.infoValue}>{visite.lieu || 'Non spécifié'}</Text>
            </View>
          </View>
        </View>

        {/* Stats Card */}
        <View style={styles.statsCard}>
          <Text style={styles.statsTitle}>Présences</Text>
          <View style={styles.statsRow}>
            <View style={styles.statItem}>
              <Text style={styles.statNumber}>{stats.presents}</Text>
              <Text style={styles.statLabel}>Présents</Text>
            </View>
            <View style={styles.statDivider} />
            <View style={styles.statItem}>
              <Text style={styles.statNumber}>{stats.total - stats.presents}</Text>
              <Text style={styles.statLabel}>Absents</Text>
            </View>
            <View style={styles.statDivider} />
            <View style={styles.statItem}>
              <Text style={styles.statNumber}>{stats.total}</Text>
              <Text style={styles.statLabel}>Total</Text>
            </View>
          </View>
          <View style={styles.progressBarContainer}>
            <View style={styles.progressBar}>
              <View 
                style={[
                  styles.progressFill, 
                  { width: `${stats.total > 0 ? (stats.presents / stats.total) * 100 : 0}%` }
                ]} 
              />
            </View>
            <Text style={styles.progressText}>
              {stats.total > 0 ? Math.round((stats.presents / stats.total) * 100) : 0}% de présence
            </Text>
          </View>
        </View>

        {/* Inscrits Section */}
        <View style={styles.section}>
          <Text style={styles.sectionTitle}>Liste des Inscrits</Text>
          {inscrits.length > 0 ? (
            <FlatList
              data={inscrits}
              renderItem={renderInscritItem}
              keyExtractor={(item) => item.id ? item.id.toString() : Math.random().toString()}
              scrollEnabled={false}
              style={styles.inscritsList}
            />
          ) : (
            <View style={styles.emptyContainer}>
              <Text style={styles.emptyText}>Aucun inscrit pour cette visite</Text>
            </View>
          )}
        </View>

        {/* Commentaire Général */}
        <View style={styles.section}>
          <Text style={styles.sectionTitle}>Commentaire Général</Text>
          <TextInput
            style={styles.commentaireGeneral}
            placeholder="Ajouter un commentaire général pour la visite..."
            value={commentaireGeneral}
            onChangeText={setCommentaireGeneral}
            multiline
            numberOfLines={4}
            placeholderTextColor="#9ca3af"
          />
        </View>
      </ScrollView>

      {/* Bottom Action */}
      <View style={styles.bottomContainer}>
        <TouchableOpacity 
          style={[styles.finishButton, saving && styles.finishButtonDisabled]} 
          onPress={handleFinVisite}
          disabled={saving}
        >
          <Text style={styles.finishButtonText}>
            {saving ? 'Sauvegarde en cours...' : '✓ Terminer la Visite'}
          </Text>
        </TouchableOpacity>
      </View>
    </SafeAreaView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fafafa',
  },
  header: {
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'center',
    paddingHorizontal: 16,
    paddingVertical: 20,
    backgroundColor: '#ffffff',
    borderBottomWidth: 1,
    borderBottomColor: '#e5e7eb',
  },
  backButton: {
    paddingRight: 16,
  },
  backButtonText: {
    fontSize: 16,
    color: '#5619e5',
    fontWeight: '500',
  },
  headerTitle: {
    fontSize: 24,
    fontWeight: 'bold',
    color: '#131118',
    
  },
  scrollContainer: {
    flex: 1,
  },
  loadingContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  loadingText: {
    marginTop: 16,
    fontSize: 16,
    color: '#6b7280',
  },
  errorContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    paddingHorizontal: 32,
  },
  errorText: {
    fontSize: 16,
    color: '#6b7280',
    textAlign: 'center',
    marginBottom: 24,
  },
  errorButton: {
    backgroundColor: '#5619e5',
    paddingHorizontal: 24,
    paddingVertical: 12,
    borderRadius: 8,
  },
  errorButtonText: {
    color: '#white',
    fontSize: 16,
    fontWeight: '500',
  },
  infoCard: {
    backgroundColor: '#ffffff',
    margin: 16,
    padding: 20,
    borderRadius: 12,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 8,
    elevation: 4,
  },
  visitTitle: {
    fontSize: 24,
    fontWeight: 'bold',
    color: '#131118',
    marginBottom: 16,
    textAlign: 'center',
  },
  infoRow: {
    justifyContent: 'center',
  },
  infoItem: {
    alignItems: 'center',
  },
  infoLabel: {
    fontSize: 14,
    color: '#6b7280',
    marginBottom: 4,
    fontWeight: '500',
  },
  infoValue: {
    fontSize: 16,
    color: '#131118',
    fontWeight: '500',
  },
  statsCard: {
    backgroundColor: '#ffffff',
    marginHorizontal: 16,
    marginBottom: 16,
    padding: 20,
    borderRadius: 12,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 8,
    elevation: 4,
  },
  statsTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#131118',
    marginBottom: 16,
    textAlign: 'center',
  },
  statsRow: {
    flexDirection: 'row',
    justifyContent: 'space-around',
    alignItems: 'center',
    marginBottom: 16,
  },
  statItem: {
    alignItems: 'center',
    flex: 1,
  },
  statNumber: {
    fontSize: 28,
    fontWeight: 'bold',
    color: '#5619e5',
  },
  statLabel: {
    fontSize: 14,
    color: '#6b7280',
    marginTop: 4,
  },
  statDivider: {
    width: 1,
    height: 40,
    backgroundColor: '#e5e7eb',
  },
  progressBarContainer: {
    alignItems: 'center',
  },
  progressBar: {
    width: '100%',
    height: 8,
    backgroundColor: '#f3f4f6',
    borderRadius: 4,
    overflow: 'hidden',
  },
  progressFill: {
    height: '100%',
    backgroundColor: '#5619e5',
    borderRadius: 4,
  },
  progressText: {
    fontSize: 12,
    color: '#6b7280',
    marginTop: 8,
    fontWeight: '500',
  },
  section: {
    marginHorizontal: 16,
    marginBottom: 16,
  },
  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#131118',
    marginBottom: 12,
  },
  inscritsList: {
    maxHeight: 400,
  },
  inscritCard: {
    backgroundColor: '#ffffff',
    padding: 16,
    borderRadius: 12,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 1 },
    shadowOpacity: 0.05,
    shadowRadius: 4,
    elevation: 2,
  },
  inscritHeader: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 12,
  },
  inscritNameContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    flex: 1,
  },
  avatarCircle: {
    width: 40,
    height: 40,
    borderRadius: 20,
    backgroundColor: '#f3f4f6',
    justifyContent: 'center',
    alignItems: 'center',
    marginRight: 12,
  },
  avatarPresent: {
    backgroundColor: '#dcfce7',
  },
  avatarText: {
    fontSize: 16,
    fontWeight: 'bold',
    color: '#6b7280',
  },
  avatarTextPresent: {
    color: '#16a34a',
  },
  inscritDetails: {
    flex: 1,
  },
  inscritName: {
    fontSize: 16,
    fontWeight: '600',
    color: '#131118',
  },
  inscritEmail: {
    fontSize: 14,
    color: '#6b7280',
    marginTop: 2,
  },
  presenceButton: {
    paddingHorizontal: 16,
    paddingVertical: 8,
    borderRadius: 20,
    backgroundColor: '#f3f4f6',
    borderWidth: 1,
    borderColor: '#e5e7eb',
  },
  presenceButtonActive: {
    backgroundColor: '#dcfce7',
    borderColor: '#16a34a',
  },
  presenceButtonText: {
    fontSize: 14,
    fontWeight: '500',
    color: '#6b7280',
  },
  presenceButtonTextActive: {
    color: '#16a34a',
  },
  commentaireInput: {
    borderWidth: 1,
    borderColor: '#e5e7eb',
    borderRadius: 8,
    padding: 12,
    backgroundColor: '#fafafa',
    fontSize: 14,
    color: '#131118',
    minHeight: 60,
    textAlignVertical: 'top',
  },
  commentaireGeneral: {
    borderWidth: 1,
    borderColor: '#e5e7eb',
    borderRadius: 8,
    padding: 16,
    backgroundColor: '#ffffff',
    fontSize: 16,
    color: '#131118',
    minHeight: 100,
    textAlignVertical: 'top',
  },
  emptyContainer: {
    padding: 40,
    alignItems: 'center',
  },
  emptyText: {
    fontSize: 16,
    color: '#6b7280',
    textAlign: 'center',
  },
  bottomContainer: {
    padding: 16,
    backgroundColor: '#ffffff',
    borderTopWidth: 1,
    borderTopColor: '#e5e7eb',
  },
  finishButton: {
    backgroundColor: '#5619e5',
    paddingVertical: 16,
    borderRadius: 12,
    alignItems: 'center',
    shadowColor: '#5619e5',
    shadowOffset: { width: 0, height: 4 },
    shadowOpacity: 0.3,
    shadowRadius: 8,
    elevation: 6,
  },
  finishButtonDisabled: {
    backgroundColor: '#9ca3af',
    shadowOpacity: 0,
    elevation: 0,
  },
  finishButtonText: {
    color: '#ffffff',
    fontSize: 18,
    fontWeight: 'bold',
  },
});

export default VisiteDetailScreen;