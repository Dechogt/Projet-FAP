// app/visites/index.js (version française complète avec filtrage par onglets)
import React, { useEffect, useState } from 'react';
import { View, Text, Button, StyleSheet, FlatList, ActivityIndicator, Alert, TouchableOpacity, Image } from 'react-native';
import axios from 'axios';
import { useRouter, useLocalSearchParams } from 'expo-router';

const VisitesScreen = () => {
  const { token } = useLocalSearchParams();
  const router = useRouter();
  const [visites, setVisites] = useState([]);
  const [filteredVisites, setFilteredVisites] = useState([]);
  const [loading, setLoading] = useState(true);
  const [activeTab, setActiveTab] = useState('a_venir'); // 'a_venir', 'en_cours', 'termine'

  useEffect(() => {
    const fetchVisites = async () => {
      if (!token) {
        Alert.alert('Erreur', 'Token non fourni. Veuillez vous reconnecter.');
        router.replace('/');
        return;
      }

      try {
        const response = await axios.get('http://192.168.0.228:8000/api/guide/visites', {
          headers: {
            'Authorization': `Bearer ${token}`,
          },
        });
        
        // 🔍 DÉBOGAGE : Vérifiez la structure des données
        console.log('Données reçues de l\'API:', response.data);
        if (response.data.length > 0) {
          console.log('Premier élément:', response.data[0]);
          console.log('Champs disponibles:', Object.keys(response.data[0]));
        }
        
        setVisites(response.data);
      } catch (error) {
        console.error('Erreur lors de la récupération des visites:', error.response?.data || error.message);
        if (error.response?.status === 401) {
          Alert.alert('Session expirée', 'Veuillez vous reconnecter.');
          router.replace('/');
        } else {
          Alert.alert('Erreur', 'Impossible de charger les visites.');
        }
      } finally {
        setLoading(false);
      }
    };

    fetchVisites();
  }, [token, router]);

  // Effet pour filtrer les visites selon l'onglet actif
  useEffect(() => {
    filterVisites();
  }, [visites, activeTab]);

  // Fonction pour filtrer les visites selon le statut
  const filterVisites = () => {
  let filtered = [];
  
  switch(activeTab) {
    case 'a_venir':
      filtered = visites.filter(visite => 
        visite.statut?.toLowerCase().trim() === 'a venir' ||
        visite.statut?.toLowerCase().trim() === 'à venir' ||
        !visite.statut
      );
      break;
    case 'en_cours':
      filtered = visites.filter(visite => 
        visite.statut?.toLowerCase().trim() === 'en cours'
      );
      break;
    case 'termine':
      filtered = visites.filter(visite => 
        visite.statut?.toLowerCase().trim() === 'passer' ||
        visite.statut?.toLowerCase().trim() === 'passé' ||
        visite.statut?.toLowerCase().trim() === 'terminé' ||
        visite.statut?.toLowerCase().trim() === 'termine'
      );
      break;
    default:
      filtered = visites;
  }

  setFilteredVisites(filtered);
};

  // Fonction pour changer d'onglet
  const handleTabChange = (tab) => {
    setActiveTab(tab);
  };

  // Fonction pour obtenir le nombre de visites par statut
  const getVisiteCount = (status) => {
    switch(status) {
      case 'a_venir':
        return visites.filter(visite => 
          visite.statut?.toLowerCase().trim() === 'a venir' ||
          visite.statut?.toLowerCase().trim() === 'à venir' ||
          !visite.statut
        ).length;
      case 'en_cours':
        return visites.filter(visite => 
          visite.statut?.toLowerCase().trim() === 'en cours'
        ).length;
      case 'termine':
        return visites.filter(visite => 
          visite.statut?.toLowerCase().trim() === 'passer' ||
          visite.statut?.toLowerCase().trim() === 'passé' ||
          visite.statut?.toLowerCase().trim() === 'terminé' ||
          visite.statut?.toLowerCase().trim() === 'termine'
        ).length;
      default:
        return 0;
    }
  };

  // Fonction pour obtenir l'URL complète de l'image
  const getImageUrl = (photoFilename) => {
  if (!photoFilename) return null;
  if (photoFilename.startsWith('http')) return photoFilename;
  return `http://192.168.0.228:8000/uploads/${photoFilename}`;
};


  // Fonction pour formater le statut avec des couleurs
  const getStatusStyle = (statut) => {
    switch(statut?.toLowerCase()) {
      case 'en cours':
        return { ...styles.statusBadge, backgroundColor: '#4CAF50' };
      case 'a venir':
      case 'à venir':
        return { ...styles.statusBadge, backgroundColor: '#2196F3' };
      case 'passer':
      case 'passé':
      case 'terminé':
      case 'termine':
        return { ...styles.statusBadge, backgroundColor: '#9E9E9E' };
      default:
        return { ...styles.statusBadge, backgroundColor: '#FF9800' };
    }
  };

  // Fonction pour obtenir le texte du statut
  const getStatusText = (statut) => {
    switch(statut?.toLowerCase()) {
      case 'en cours':
        return 'En cours';
      case 'a venir':
      case 'à venir':
        return 'À venir';
      case 'passer':
      case 'passé':
      case 'terminé':
      case 'termine':
        return 'Terminé';
      default:
        return 'À venir';
    }
  };

  // Fonction pour formater la date
  const formatDate = (dateString) => {
    const date = new Date(dateString);
    const options = { 
      month: 'short', 
      day: 'numeric'
    };
    return date.toLocaleDateString('fr-FR', options);
  };

  // Fonction pour obtenir le message d'état vide selon l'onglet
  const getEmptyMessage = () => {
    switch(activeTab) {
      case 'a_venir':
        return {
          title: 'Aucune visite à venir',
          subtitle: 'Vos prochaines visites programmées apparaîtront ici.'
        };
      case 'en_cours':
        return {
          title: 'Aucune visite en cours',
          subtitle: 'Les visites actuellement en cours apparaîtront ici.'
        };
      case 'termine':
        return {
          title: 'Aucune visite terminée',
          subtitle: 'Vos visites terminées apparaîtront ici.'
        };
      default:
        return {
          title: 'Aucune visite trouvée',
          subtitle: 'Vos visites apparaîtront ici.'
        };
    }
  };

  const renderItem = ({ item }) => {
  const imageUri = getImageUrl(item.photo_filename || item.photoFilename);

  return (
    <TouchableOpacity
      style={styles.visiteItem}
      onPress={() =>
        router.push({
          pathname: `/visites/${item.id}`,
          params: { token: token, visiteId: item.id },
        })
      }
    >
      {/* Image de la visite */}
      <View style={styles.imageContainer}>
        <Image
          source={{ uri: imageUri }}
          style={styles.visiteImage}
          resizeMode="cover"
          onError={(e) => {
            console.log('Erreur chargement image :', imageUri, e.nativeEvent.error);
          }}
          onLoad={() => console.log('Image chargée :', imageUri)}
        />
        <View style={getStatusStyle(item.statut)}>
          <Text style={styles.statusText}>
            {getStatusText(item.statut)}
          </Text>
        </View>
      </View>

      {/* Informations de la visite */}
      <View style={styles.visiteInfo}>
        <Text style={styles.visiteTitle}>{item.lieu}</Text>
        <Text style={styles.visitePays}>{item.pays}</Text>
        <Text style={styles.visiteDate}>
          {formatDate(item.date)} • {item.heure_debut || item.heureDebut} - {item.heure_fin || item.heureFin}
        </Text>
        <Text style={styles.visiteVisiteurs}>
          {item.nombre_max_visiteurs || item.nombreMaxVisiteurs} visiteurs max
        </Text>
        <Text style={styles.visitePrix}>{item.prix}€</Text>
      </View>

      <View style={styles.actionButton}>
        <Text style={styles.actionButtonText}>
          {item.statut?.toLowerCase() === 'en cours'
            ? 'Vérifier'
            : item.statut?.toLowerCase() === 'passer' || item.statut?.toLowerCase() === 'passé'
            ? 'Voir détails'
            : 'Préparer'}
        </Text>
      </View>
    </TouchableOpacity>
  );
};

  if (loading) {
    return (
      <View style={styles.centered}>
        <ActivityIndicator size="large" color="#6C5CE7" />
        <Text style={styles.loadingText}>Chargement des visites...</Text>
      </View>
    );
  }

  const emptyMessage = getEmptyMessage();

  return (
    <View style={styles.container}>
      {/* En-tête avec onglets */}
      <View style={styles.header}>
        <Text style={styles.appTitle}>Mes Visites</Text>
        <View style={styles.tabsContainer}>
          <TouchableOpacity 
            style={activeTab === 'a_venir' ? styles.activeTab : styles.inactiveTab}
            onPress={() => handleTabChange('a_venir')}
          >
            <Text style={activeTab === 'a_venir' ? styles.activeTabText : styles.inactiveTabText}>
              À venir ({getVisiteCount('a_venir')})
            </Text>
          </TouchableOpacity>
          <TouchableOpacity 
            style={activeTab === 'en_cours' ? styles.activeTab : styles.inactiveTab}
            onPress={() => handleTabChange('en_cours')}
          >
            <Text style={activeTab === 'en_cours' ? styles.activeTabText : styles.inactiveTabText}>
              En cours ({getVisiteCount('en_cours')})
            </Text>
          </TouchableOpacity>
          <TouchableOpacity 
            style={activeTab === 'termine' ? styles.activeTab : styles.inactiveTab}
            onPress={() => handleTabChange('termine')}
          >
            <Text style={activeTab === 'termine' ? styles.activeTabText : styles.inactiveTabText}>
              Terminées ({getVisiteCount('termine')})
            </Text>
          </TouchableOpacity>
        </View>
      </View>

      {filteredVisites.length > 0 ? (
        <FlatList
          data={filteredVisites}
          renderItem={renderItem}
          keyExtractor={(item) => item.id ? item.id.toString() : Math.random().toString()}
          contentContainerStyle={styles.listContent}
          showsVerticalScrollIndicator={false}
        />
      ) : (
        <View style={styles.emptyContainer}>
          <Text style={styles.emptyText}>{emptyMessage.title}</Text>
          <Text style={styles.emptySubText}>
            {emptyMessage.subtitle}
          </Text>
        </View>
      )}

      {/* Bouton de rafraîchissement */}
      <View style={styles.refreshContainer}>
        <TouchableOpacity 
          style={styles.refreshButton}
          onPress={() => {
            setLoading(true);
            // Relancer la récupération des données
            setTimeout(async () => {
              try {
                const response = await axios.get('http://192.168.0.228:8000/api/guide/visites', {
                  headers: {
                    'Authorization': `Bearer ${token}`,
                  },
                });
                setVisites(response.data);
              } catch (error) {
                console.error('Erreur lors du rafraîchissement:', error);
                Alert.alert('Erreur', 'Impossible de rafraîchir les données.');
              } finally {
                setLoading(false);
              }
            }, 1000);
          }}
        >
          <Text style={styles.refreshButtonText}>Actualiser</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#F8F9FA',
  },
  header: {
    backgroundColor: '#FFFFFF',
    paddingTop: 50,
    paddingBottom: 20,
    paddingHorizontal: 20,
    borderBottomWidth: 1,
    borderBottomColor: '#E0E0E0',
  },
  appTitle: {
    fontSize: 24,
    fontWeight: 'bold',
    textAlign: 'center',
    marginBottom: 20,
    color: '#333',
  },
  tabsContainer: {
    flexDirection: 'row',
    justifyContent: 'space-around',
  },
  activeTab: {
    borderBottomWidth: 3,
    borderBottomColor: '#6C5CE7',
    paddingBottom: 10,
    paddingHorizontal: 5,
  },
  inactiveTab: {
    paddingBottom: 10,
    paddingHorizontal: 5,
  },
  activeTabText: {
    fontSize: 14,
    fontWeight: 'bold',
    color: '#333',
    textAlign: 'center',
  },
  inactiveTabText: {
    fontSize: 14,
    color: '#999',
    textAlign: 'center',
  },
  centered: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  loadingText: {
    marginTop: 10,
    fontSize: 16,
    color: '#666',
  },
  listContent: {
    padding: 20,
    paddingBottom: 100,
  },
  visiteItem: {
    backgroundColor: '#FFFFFF',
    marginBottom: 20,
    borderRadius: 12,
    overflow: 'hidden',
    elevation: 3,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.1,
    shadowRadius: 8,
  },
  imageContainer: {
    position: 'relative',
    height: 200,
  },
  visiteImage: {
    width: '100%',
    height: '100%',
  },
  statusBadge: {
    position: 'absolute',
    top: 12,
    left: 12,
    paddingHorizontal: 12,
    paddingVertical: 6,
    borderRadius: 16,
  },
  statusText: {
    color: '#FFFFFF',
    fontSize: 12,
    fontWeight: 'bold',
  },
  visiteInfo: {
    padding: 16,
  },
  visiteTitle: {
    fontSize: 20,
    fontWeight: 'bold',
    color: '#333',
    marginBottom: 4,
  },
  visitePays: {
    fontSize: 14,
    color: '#666',
    marginBottom: 8,
  },
  visiteDate: {
    fontSize: 14,
    color: '#666',
    marginBottom: 4,
  },
  visiteVisiteurs: {
    fontSize: 14,
    color: '#666',
    marginBottom: 4,
  },
  visitePrix: {
    fontSize: 16,
    fontWeight: 'bold',
    color: '#6C5CE7',
  },
  actionButton: {
    position: 'absolute',
    bottom: 16,
    right: 16,
    backgroundColor: '#6C5CE7',
    paddingHorizontal: 16,
    paddingVertical: 8,
    borderRadius: 20,
  },
  actionButtonText: {
    color: '#FFFFFF',
    fontSize: 12,
    fontWeight: 'bold',
  },
  emptyContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 40,
  },
  emptyText: {
    fontSize: 18,
    fontWeight: 'bold',
    color: '#333',
    marginBottom: 8,
    textAlign: 'center',
  },
  emptySubText: {
    fontSize: 14,
    color: '#666',
    textAlign: 'center',
  },
  refreshContainer: {
    position: 'absolute',
    bottom: 30,
    left: 20,
    right: 20,
  },
  refreshButton: {
    backgroundColor: '#6C5CE7',
    paddingVertical: 12,
    paddingHorizontal: 24,
    borderRadius: 25,
    alignItems: 'center',
  },
  refreshButtonText: {
    color: '#FFFFFF',
    fontSize: 16,
    fontWeight: 'bold',
  },
});

export default VisitesScreen;