import axios from 'axios';
import * as SecureStore from 'expo-secure-store';

// Adresse IP locale (⚠️ à adapter si nécessaire)
const API_BASE_URL = __DEV__
  ? 'http://192.168.0.228:8000'
  : 'https://your-production-domain.com';

// Instance Axios
const api = axios.create({
  baseURL: API_BASE_URL,
  timeout: 10000,
  headers: {
    'Content-Type': 'application/json',
    Accept: 'application/json',
  },
});

// Logs debug
if (__DEV__) {
  api.interceptors.request.use(
    (config) => {
      console.log('🚀 API Request:', config.method?.toUpperCase(), config.url);
      return config;
    },
    (error) => {
      console.error('❌ API Request Error:', error);
      return Promise.reject(error);
    }
  );

  api.interceptors.response.use(
    (response) => {
      console.log('✅ API Response:', response.status, response.config.url);
      return response;
    },
    (error) => {
      console.error('❌ API Response Error:', error?.response?.status, error?.message);
      return Promise.reject(error);
    }
  );
}

export const AuthService = {
  async login(credentials) {
    try {
      const response = await api.post('/api/login_check', credentials);

      if (response.data?.token) {
        await SecureStore.setItemAsync('jwt_token', response.data.token);
        return {
          success: true,
          token: response.data.token,
          message: 'Connexion réussie',
        };
      }

      return {
        success: false,
        message: 'Réponse invalide du serveur',
      };
    } catch (error) {
      console.error('Erreur de connexion:', error);

      if (error.response) {
        const { status, data } = error.response;
        const defaultMessage = data?.message || 'Erreur de connexion';

        switch (status) {
          case 401:
            return { success: false, message: 'Identifiants incorrects' };
          case 400:
            return { success: false, message: defaultMessage };
          case 500:
            return { success: false, message: 'Erreur serveur. Réessayez plus tard.' };
          default:
            return { success: false, message: defaultMessage };
        }
      }

      if (error.request) {
        return {
          success: false,
          message: 'Impossible de se connecter au serveur. Vérifiez votre connexion internet.',
        };
      }

      return { success: false, message: 'Une erreur inattendue est survenue' };
    }
  },

  async getGuideVisits(token) {
    try {
      const response = await api.get('/api/mes-visites', {
        headers: { Authorization: `Bearer ${token}` },
      });
      return { success: true, visits: response.data };
    } catch (error) {
      console.error('Erreur visites:', error);
      return {
        success: false,
        message: 'Impossible de récupérer les visites',
        visits: [],
      };
    }
  },

  async validateToken(token) {
    try {
      const response = await api.get('/api/profile', {
        headers: { Authorization: `Bearer ${token}` },
      });
      return response.status === 200;
    } catch (error) {
      console.error('Token invalide:', error);
      return false;
    }
  },

  async getProfile(token) {
    try {
      const response = await api.get('/api/profile', {
        headers: { Authorization: `Bearer ${token}` },
      });
      return { success: true, user: response.data };
    } catch (error) {
      console.error('Erreur profil:', error);
      return { success: false, message: 'Impossible de récupérer le profil' };
    }
  },
};
