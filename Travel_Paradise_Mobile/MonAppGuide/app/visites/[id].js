// app/visites/[id].js
import React, { useState, useEffect } from 'react';
import { View, Text, Button, StyleSheet, FlatList, TextInput, Alert, ActivityIndicator, TouchableOpacity } from 'react-native';
import axios from 'axios';
import { useRouter, useLocalSearchParams } from 'expo-router';

const VisiteDetailScreen = () => {
  const { token, visiteId } = useLocalSearchParams(); // Récupère les paramètres
  const router = useRouter();
  const [visite, setVisite] = useState(null);
  const [inscrits, setInscrits] = useState([]);
  const [loading, setLoading] = useState(true);
  const [commentaireGeneral, setCommentaireGeneral] = useState('');

  useEffect(() => {
    const fetchVisiteDetails = async () => {
      if (!token || !visiteId) {
        Alert.alert('Erreur', 'Informations manquantes pour charger les détails.');
        router.replace('/visites'); // Retourne à la liste des visites
        return;
      }

      try {
        setLoading(true);
        // Assure-toi que l'URL correspond à ta route API pour les détails
        const response = await axios.get(`http://192.168.0.228:8000/api/guide/visites/${visiteId}`, {
          headers: {
            'Authorization': `Bearer ${token}`,
          },
        });
        setVisite(response.data);
        setInscrits(response.data.inscrits.map(inscrit => ({
          ...inscrit,
          estPresent: false,
          commentaireInscrit: '',
        })));
        setCommentaireGeneral(response.data.commentaireGeneral || '');
      } catch (error) {
        console.error('Erreur lors de la récupération des détails de la visite:', error.response?.data || error.message);
        if (error.response?.status === 401) {
          Alert.alert('Session expirée', 'Veuillez vous reconnecter.');
          router.replace('/login');
        } else {
          Alert.alert('Erreur', 'Impossible de charger les détails de la visite.');
          router.back(); // Retourne à l'écran précédent
        }
      } finally {
        setLoading(false);
      }
    };

    fetchVisiteDetails();
  }, [token, visiteId, router]);

  const togglePresence = (inscritId) => {
    setInscrits(currentInscrits =>
      currentInscrits.map(inscrit =>
        inscrit.id === inscritId ? { ...inscrit, estPresent: !inscrit.estPresent } : inscrit
      )
    );
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
      // Assure-toi que l'URL correspond à ta route API pour la mise à jour
      const response = await axios.post(`http://localhost:8000/api/guide/visites/${visiteId}/checkin`, payload, {
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
        },
      });
      Alert.alert('Succès', 'La visite a été marquée comme terminée et les présences mises à jour.', [
        { text: 'OK', onPress: () => router.back() } // Retourne à la liste des visites
      ]);
    } catch (error) {
      console.error('Erreur lors de la fin de visite:', error.response?.data || error.message);
      Alert.alert('Erreur', 'Impossible de terminer la visite. Veuillez réessayer.');
    }
  };

  const renderInscritItem = ({ item }) => (
    <View style={styles.inscritItem}>
      <View style={styles.inscritInfo}>
        <Text style={styles.inscritName}>{item.nom || 'Inconnu'}</Text>
        <TouchableOpacity onPress={() => togglePresence(item.id)} style={styles.checkbox}>
          <Text style={styles.checkboxText}>{item.estPresent ? '✅' : '⬜'}</Text>
        </TouchableOpacity>
      </View>
      <TextInput
        style={styles.inputCommentaire}
        placeholder="Commentaire pour cet inscrit..."
        value={item.commentaireInscrit}
        onChangeText={(text) => updateCommentaireInscrit(item.id, text)}
        multiline
      />
    </View>
  );

  if (loading) {
    return (
      <View style={styles.centered}>
        <ActivityIndicator size="large" color="#0000ff" />
      </View>
    );
  }

  if (!visite) {
    return (
      <View style={styles.centered}>
        <Text>Impossible de charger les détails de la visite.</Text>
        <Button title="Retour" onPress={() => router.back()} />
      </View>
    );
  }

  return (
    <View style={styles.container}>
      <Text style={styles.title}>{visite.nom || 'Détails de la Visite'}</Text>
      <Text>Date: {visite.dateVisite || 'Non spécifiée'}</Text>
      <Text>Lieu: {visite.lieu || 'Non spécifié'}</Text>

      <Text style={styles.sectionTitle}>Inscrits :</Text>
      <FlatList
        data={inscrits}
        renderItem={renderInscritItem}
        keyExtractor={(item) => item.id ? item.id.toString() : Math.random().toString()}
        style={styles.listInscrits}
      />

      <Text style={styles.sectionTitle}>Commentaire Général :</Text>
      <TextInput
        style={styles.inputGeneral}
        placeholder="Ajouter un commentaire général pour la visite..."
        value={commentaireGeneral}
        onChangeText={setCommentaireGeneral}
        multiline
      />

      <Button title="Terminer la Visite et Sauvegarder" onPress={handleFinVisite} color="#007bff" />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    padding: 15,
    backgroundColor: '#f8f9fa',
  },
  centered: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  title: {
    fontSize: 24,
    fontWeight: 'bold',
    marginBottom: 10,
    textAlign: 'center',
  },
  sectionTitle: {
    fontSize: 18,
    fontWeight: 'bold',
    marginTop: 15,
    marginBottom: 8,
  },
  listInscrits: {
    maxHeight: 250,
    marginBottom: 15,
  },
  inscritItem: {
    backgroundColor: '#fff',
    padding: 10,
    marginBottom: 8,
    borderRadius: 5,
    borderWidth: 1,
    borderColor: '#e0e0e0',
  },
  inscritInfo: {
    flexDirection: 'row',
    justifyContent: 'space-between',
    alignItems: 'center',
    marginBottom: 5,
  },
  inscritName: {
    fontSize: 16,
    flex: 1,
    marginRight: 10,
  },
  checkbox: {
    padding: 5,
  },
  checkboxText: {
    fontSize: 20,
  },
  inputCommentaire: {
    borderColor: '#ccc',
    borderWidth: 1,
    padding: 8,
    borderRadius: 4,
    backgroundColor: '#fefefe',
    minHeight: 40,
    fontSize: 14,
  },
  inputGeneral: {
    borderColor: '#ccc',
    borderWidth: 1,
    padding: 10,
    borderRadius: 5,
    backgroundColor: '#fff',
    minHeight: 80,
    fontSize: 15,
    marginBottom: 20,
  },
});

export default VisiteDetailScreen;