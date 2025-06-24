// app/visites/index.js (modification)
import React, { useEffect, useState } from 'react';
import { View, Text, Button, StyleSheet, FlatList, ActivityIndicator, Alert, TouchableOpacity } from 'react-native';
import axios from 'axios';
import { useRouter, useLocalSearchParams } from 'expo-router';

const VisitesScreen = () => {
  const { token } = useLocalSearchParams();
  const router = useRouter();
  const [visites, setVisites] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchVisites = async () => {
      if (!token) {
        Alert.alert('Erreur', 'Token non fourni. Veuillez vous reconnecter.');
        // Redirige vers la route par défaut '/' qui est maintenant login.js
        router.replace('/');
        return;
      }

      try {
        const response = await axios.get('http://192.168.0.228:8000/api/guide/visites', {
          headers: {
            'Authorization': `Bearer ${token}`,
          },
        });
        setVisites(response.data);
      } catch (error) {
        console.error('Erreur lors de la récupération des visites:', error.response?.data || error.message);
        if (error.response?.status === 401) {
          Alert.alert('Session expirée', 'Veuillez vous reconnecter.');
          router.replace('/'); // Redirige vers le login si la session est expirée
        } else {
          Alert.alert('Erreur', 'Impossible de charger les visites.');
        }
      } finally {
        setLoading(false);
      }
    };

    fetchVisites();
  }, [token, router]);

  const renderItem = ({ item }) => (
  <TouchableOpacity
    style={styles.visiteItem}
    onPress={() =>
      router.push({
        pathname: `/visites/${item.id}`,
        params: { token: token, visiteId: item.id },
      })
    }
  >
    <Text style={styles.visiteTitle}>
      {item.lieu}, {item.pays}
    </Text>
    <Text>Date: {item.date} à {item.heureDebut}</Text>
    <Text>Durée: {item.duree} h</Text>
    <Text>Statut: {item.statut || 'Inconnu'}</Text>
  </TouchableOpacity>
);


  if (loading) {
    return (
      <View style={styles.centered}>
        <ActivityIndicator size="large" color="#0000ff" />
      </View>
    );
  }

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Vos Visites</Text>
      {visites.length > 0 ? (
        <FlatList
          data={visites}
          renderItem={renderItem}
          keyExtractor={(item) => item.id ? item.id.toString() : Math.random().toString()}
          contentContainerStyle={styles.listContent}
        />
      ) : (
        <Text>Aucune visite trouvée.</Text>
      )}
      <Button title="Rafraîchir" onPress={() => { /* Logique de rafraîchissement si nécessaire */ }} />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 15,
    backgroundColor: '#f5f5f5',
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    marginBottom: 15,
    textAlign: 'center',
  },
  centered: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  visiteItem: {
    backgroundColor: '#fff',
    padding: 15,
    marginBottom: 10,
    borderRadius: 8,
    borderWidth: 1,
    borderColor: '#ddd',
    elevation: 2,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 1 },
    shadowOpacity: 0.2,
    shadowRadius: 1.41,
  },
  visiteTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    marginBottom: 5,
  },
  listContent: {
    paddingBottom: 20,
  }
});

export default VisitesScreen;