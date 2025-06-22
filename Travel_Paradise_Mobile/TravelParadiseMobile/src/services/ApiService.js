import axios from 'axios';
import * as SecureStore from 'expo-secure-store';

// Point d'entrée API sécurisé
const API_BASE_URL = __DEV__
  ? 'http://192.168.0.228:8000'
  : 'https://your-production-domain.com';

const apiClient = axios.create({
  baseURL: API_BASE_URL,
  timeout: 10000,
  headers: {
    'Content-Type': 'application/json',
    Accept: 'application/json',
  },
});

// Ajouter automatiquement le token
apiClient.interceptors.request.use(async (config) => {
  const token = await SecureStore.getItemAsync('jwt_token');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

export const ApiService = {
  /**
   * Récupérer les visites du guide connecté
   */
  async getGuideVisits() {
    try {
      const response = await apiClient.get('/api/mes-visites');
      return response.data;
    } catch (error) {
      console.error('Erreur lors de la récupération des visites:', error);
      throw new Error('Impossible de récupérer les visites');
    }
  },

  /**
   * Récupérer les détails d'une visite
   */
  async getVisitDetails(visitId) {
    try {
      const response = await apiClient.get(`/api/visites/${visitId}`);
      return response.data;
    } catch (error) {
      console.error('Erreur détails visite:', error);
      throw new Error('Impossible de récupérer les détails de la visite');
    }
  },

  /**
   * Marquer la présence d'un visiteur
   */
  async updateVisitorPresence(visiteurId, present, commentaire = '') {
    try {
      const response = await apiClient.patch(`/api/visiteurs/${visiteurId}`, {
        present,
        commentaire,
      });
      return response.data;
    } catch (error) {
      console.error('Erreur présence visiteur:', error);
      throw new Error('Impossible de mettre à jour la présence');
    }
  },

  /**
   * Clôturer une visite
   */
  async closeVisit(visitId, commentaireGeneral) {
    try {
      const response = await apiClient.patch(`/api/visites/${visitId}`, {
        status: 'completed',
        commentaire_general: commentaireGeneral,
      });
      return response.data;
    } catch (error) {
      console.error('Erreur clôture visite:', error);
      throw new Error('Impossible de clôturer la visite');
    }
  },

  /**
   * Démarrer une visite
   */
  async startVisit(visitId) {
    try {
      const response = await apiClient.patch(`/api/visites/${visitId}`, {
        status: 'in_progress',
        heure_debut: new Date().toISOString(),
      });
      return response.data;
    } catch (error) {
      console.error('Erreur démarrage visite:', error);
      throw new Error('Impossible de démarrer la visite');
    }
  },
};
