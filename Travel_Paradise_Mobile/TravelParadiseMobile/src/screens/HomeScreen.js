import React, { useState, useEffect } from 'react';
import {
  View,
  StyleSheet,
  FlatList,
  RefreshControl,
  Alert,
} from 'react-native';
import {
  Text,
  Card,
  FAB,
  Chip,
  Button,
  ActivityIndicator,
  Appbar,
} from 'react-native-paper';
import { SafeAreaView } from 'react-native-safe-area-context';
import * as SecureStore from 'expo-secure-store';
import { AuthService } from '../services/AuthService';

const HomeScreen = ({ navigation, onLogout }) => {
  const [visits, setVisits] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [isRefreshing, setIsRefreshing] = useState(false);
  const [filter, setFilter] = useState('all');

  useEffect(() => {
    loadVisits();
  }, []);

  const loadVisits = async () => {
    try {
      const token = await SecureStore.getItemAsync('jwt_token');
      if (token) {
        const response = await AuthService.getGuideVisits(token);
        if (response.success) {
          setVisits(response.visits || []);
        } else {
          console.error('Erreur API:', response.message);
        }
      }
    } catch (error) {
      console.error('Erreur lors du chargement des visites:', error);
    } finally {
      setIsLoading(false);
    }
  };

  const handleRefresh = async () => {
    setIsRefreshing(true);
    await loadVisits();
    setIsRefreshing(false);
  };

  const handleLogout = () => {
    Alert.alert(
      'Déconnexion',
      'Êtes-vous sûr de vouloir vous déconnecter ?',
      [
        { text: 'Annuler', style: 'cancel' },
        { text: 'Déconnecter', onPress: onLogout, style: 'destructive' },
      ]
    );
  };

  const getStatusColor = (status) => {
    switch (status) {
      case 'upcoming': return '#2196F3';
      case 'in_progress': return '#FF9800';
      case 'completed': return '#4CAF50';
      case 'cancelled': return '#F44336';
      default: return '#9E9E9E';
    }
  };

  const getStatusLabel = (status) => {
    switch (status) {
      case 'upcoming': return 'À venir';
      case 'in_progress': return 'En cours';
      case 'completed': return 'Terminée';
      case 'cancelled': return 'Annulée';
      default: return 'Inconnu';
    }
  };

  const filteredVisits = visits.filter(visit => {
    if (filter === 'all') return true;
    return visit.status === filter;
  });

  const formatDate = (dateString) => {
    try {
      const date = new Date(dateString);
      return date.toLocaleDateString('fr-FR', {
        weekday: 'short',
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
      });
    } catch (error) {
      return dateString;
    }
  };

  const renderVisitCard = ({ item: visit }) => (
    <Card 
      style={styles.visitCard}
      onPress={() => navigation.navigate('VisitDetail', { visit })}
    >
      <Card.Content>
        <View style={styles.visitHeader}>
          <Text style={styles.visitTitle} numberOfLines={2}>
            {visit.titre || visit.title || 'Visite sans titre'}
          </Text>
          <Chip
            style={[styles.statusChip, { backgroundColor: getStatusColor(visit.status) }]}
            textStyle={styles.statusChipText}
          >
            {getStatusLabel(visit.status)}
          </Chip>
        </View>
        
        <View style={styles.visitDetails}>
          <Text style={styles.visitDate}>
            📅 {formatDate(visit.date_debut || visit.date)}
          </Text>
          <Text style={styles.visitLocation}>
            📍 {visit.lieu || visit.location || 'Lieu non spécifié'}
          </Text>
          <Text style={styles.visitParticipants}>
            👥 {visit.nombre_participants || visit.participants_count || 0} participant(s)
          </Text>
        </View>

        {visit.description && (
          <Text style={styles.visitDescription} numberOfLines={2}>
            {visit.description}
          </Text>
        )}
      </Card.Content>
    </Card>
  );

  const renderEmptyState = () => (
    <View style={styles.emptyState}>
      <Text style={styles.emptyStateTitle}>Aucune visite</Text>
      <Text style={styles.emptyStateSubtitle}>
        {filter === 'all' 
          ? 'Vous n\'avez aucune visite programmée pour le moment.'
          : `Aucune visite ${getStatusLabel(filter).toLowerCase()} trouvée.`}
      </Text>
      <Button
        mode="outlined"
        onPress={handleRefresh}
        style={styles.refreshButton}
        icon="refresh"
      >
        Actualiser
      </Button>
    </View>
  );

  if (isLoading) {
    return (
      <SafeAreaView style={styles.container}>
        <Appbar.Header>
          <Appbar.Content title="Mes Visites" />
          <Appbar.Action icon="logout" onPress={handleLogout} />
        </Appbar.Header>
        <View style={styles.loadingContainer}>
          <ActivityIndicator size="large" />
          <Text style={styles.loadingText}>Chargement des visites...</Text>
        </View>
      </SafeAreaView>
    );
  }

  return (
    <SafeAreaView style={styles.container}>
      <Appbar.Header>
        <Appbar.Content title="Mes Visites" />
        <Appbar.Action icon="logout" onPress={handleLogout} />
      </Appbar.Header>

      <View style={styles.filterContainer}>
        <Chip selected={filter === 'all'} onPress={() => setFilter('all')} style={styles.filterChip}>
          Toutes ({visits.length})
        </Chip>
        <Chip selected={filter === 'upcoming'} onPress={() => setFilter('upcoming')} style={styles.filterChip}>
          À venir ({visits.filter(v => v.status === 'upcoming').length})
        </Chip>
        <Chip selected={filter === 'in_progress'} onPress={() => setFilter('in_progress')} style={styles.filterChip}>
          En cours ({visits.filter(v => v.status === 'in_progress').length})
        </Chip>
        <Chip selected={filter === 'completed'} onPress={() => setFilter('completed')} style={styles.filterChip}>
          Terminées ({visits.filter(v => v.status === 'completed').length})
        </Chip>
      </View>

      <FlatList
        data={filteredVisits}
        renderItem={renderVisitCard}
        keyExtractor={(item) => item.id?.toString() || Math.random().toString()}
        contentContainerStyle={styles.listContainer}
        refreshControl={<RefreshControl refreshing={isRefreshing} onRefresh={handleRefresh} />}
        ListEmptyComponent={renderEmptyState}
        showsVerticalScrollIndicator={false}
      />

      <FAB style={styles.fab} icon="refresh" onPress={handleRefresh} loading={isRefreshing} />
    </SafeAreaView>
  );
};

const styles = StyleSheet.create({
  // styles identiques à ceux que tu avais
  // pas besoin de les répéter ici
});

export default HomeScreen;
