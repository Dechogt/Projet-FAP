// src/context/AuthContext.js
import React, { createContext, useContext, useReducer, useEffect } from 'react';
import ApiService from '../services/ApiService';
import { Config } from '../constants/Config';

// État initial
const initialState = {
  isLoading: true,        // App en cours de chargement
  isAuthenticated: false, // Utilisateur connecté ?
  user: null,            // Données de l'utilisateur connecté
  token: null,           // Token JWT
  error: null,           // Erreur de connexion
};

// Types d'actions
const AuthActionTypes = {
  LOADING: 'LOADING',
  LOGIN_SUCCESS: 'LOGIN_SUCCESS',
  LOGIN_ERROR: 'LOGIN_ERROR',
  LOGOUT: 'LOGOUT',
  RESTORE_SESSION: 'RESTORE_SESSION',
  CLEAR_ERROR: 'CLEAR_ERROR',
};

// Reducer pour gérer l'état
const authReducer = (state, action) => {
  if (Config.LOGGING.ENABLE_CONSOLE_LOGS) {
    console.log('🔄 Auth Action:', action.type, action.payload);
  }

  switch (action.type) {
    case AuthActionTypes.LOADING:
      return {
        ...state,
        isLoading: true,
        error: null,
      };

    case AuthActionTypes.LOGIN_SUCCESS:
      return {
        ...state,
        isLoading: false,
        isAuthenticated: true,
        user: action.payload.user,
        token: action.payload.token,
        error: null,
      };

    case AuthActionTypes.LOGIN_ERROR:
      return {
        ...state,
        isLoading: false,
        isAuthenticated: false,
        user: null,
        token: null,
        error: action.payload,
      };

    case AuthActionTypes.LOGOUT:
      return {
        ...initialState,
        isLoading: false,
      };

    case AuthActionTypes.RESTORE_SESSION:
      return {
        ...state,
        isLoading: false,
        isAuthenticated: action.payload.token ? true : false,
        user: action.payload.user,
        token: action.payload.token,
        error: null,
      };

    case AuthActionTypes.CLEAR_ERROR:
      return {
        ...state,
        error: null,
      };

    default:
      return state;
  }
};

// Création du Context
const AuthContext = createContext({});

// Provider du Context
export const AuthProvider = ({ children }) => {
  const [state, dispatch] = useReducer(authReducer, initialState);

  // Restaurer la session au démarrage
  useEffect(() => {
    restoreSession();
  }, []);

  // === FONCTIONS D'AUTHENTIFICATION ===

  const restoreSession = async () => {
    try {
      dispatch({ type: AuthActionTypes.LOADING });

      const token = await ApiService.getToken();
      const userData = await ApiService.getUserData();

      if (token) {
        // Vérifier si le token est encore valide
        try {
          const profile = await ApiService.getProfile();
          dispatch({
            type: AuthActionTypes.RESTORE_SESSION,
            payload: {
              token,
              user: profile || userData,
            },
          });
        } catch (error) {
          // Token expiré ou invalide
          await ApiService.clearAuthData();
          dispatch({
            type: AuthActionTypes.RESTORE_SESSION,
            payload: { token: null, user: null },
          });
        }
      } else {
        dispatch({
          type: AuthActionTypes.RESTORE_SESSION,
          payload: { token: null, user: null },
        });
      }
    } catch (error) {
      console.error('Erreur lors de la restauration de session:', error);
      dispatch({
        type: AuthActionTypes.RESTORE_SESSION,
        payload: { token: null, user: null },
      });
    }
  };

  const login = async (credentials) => {
    try {
      dispatch({ type: AuthActionTypes.LOADING });

      const response = await ApiService.login(credentials);

      if (response.token) {
        dispatch({
          type: AuthActionTypes.LOGIN_SUCCESS,
          payload: {
            token: response.token,
            user: response.user || response.guide, // Adapter selon votre API
          },
        });

        return { success: true, message: Config.SUCCESS_MESSAGES.LOGIN_SUCCESS };
      } else {
        throw new Error('Token non reçu');
      }
    } catch (error) {
      const errorMessage = error.message || Config.ERROR_MESSAGES.LOGIN_FAILED;
      
      dispatch({
        type: AuthActionTypes.LOGIN_ERROR,
        payload: errorMessage,
      });

      return { success: false, message: errorMessage, error };
    }
  };

  const logout = async () => {
    try {
      await ApiService.logout();
      dispatch({ type: AuthActionTypes.LOGOUT });
      return { success: true, message: Config.SUCCESS_MESSAGES.LOGOUT_SUCCESS };
    } catch (error) {
      console.error('Erreur lors de la déconnexion:', error);
      // On déconnecte quand même côté client
      dispatch({ type: AuthActionTypes.LOGOUT });
      return { success: true, message: Config.SUCCESS_MESSAGES.LOGOUT_SUCCESS };
    }
  };

  const clearError = () => {
    dispatch({ type: AuthActionTypes.CLEAR_ERROR });
  };

  const updateUserData = async () => {
    try {
      const profile = await ApiService.getProfile();
      dispatch({
        type: AuthActionTypes.LOGIN_SUCCESS,
        payload: {
          token: state.token,
          user: profile,
        },
      });
      return profile;
    } catch (error) {
      console.error('Erreur lors de la mise à jour du profil:', error);
      throw error;
    }
  };

  // === FONCTIONS UTILITAIRES ===

  const isGuide = () => {
    return state.user?.role === 'guide' || state.user?.type === 'guide';
  };

  const getGuideId = () => {
    return state.user?.id || state.user?.guide_id;
  };

  const getUserName = () => {
    if (!state.user) return '';
    return state.user.name || 
           `${state.user.firstName || ''} ${state.user.lastName || ''}`.trim() ||
           state.user.email ||
           'Utilisateur';
  };

  // Valeurs exposées par le Context
  const contextValue = {
    // État
    ...state,
    
    // Actions
    login,
    logout,
    restoreSession,
    clearError,
    updateUserData,
    
    // Utilitaires
    isGuide,
    getGuideId,
    getUserName,
  };

  return (
    <AuthContext.Provider value={contextValue}>
      {children}
    </AuthContext.Provider>
  );
};

// Hook personnalisé pour utiliser le Context
export const useAuth = () => {
  const context = useContext(AuthContext);
  
  if (!context) {
    throw new Error('useAuth doit être utilisé dans un AuthProvider');
  }
  
  return context;
};

// Export du Context pour les cas avancés
export { AuthContext, AuthActionTypes };