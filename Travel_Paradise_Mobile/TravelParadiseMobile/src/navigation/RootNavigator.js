// src/navigation/RootNavigator.js
import React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import { ActivityIndicator, View, StyleSheet } from 'react-native';
import { Text } from 'react-native-paper';

// Context
import { useAuth } from '../context/AuthContext';

// Navigateurs
import AuthNavigator from './AuthNavigator';
import AppNavigator from './AppNavigator';

// Configuration et styles
import { Config } from '../constants/Config';

const Stack = createStackNavigator();

const RootNavigator = () => {
  const { isLoading, isAuthenticated } = useAuth();

  if (Config.LOGGING.ENABLE_NAVIGATION_LOGS) {
    console.log('🧭 Navigation - isLoading:', isLoading, 'isAuthenticated:', isAuthenticated);
  }

  // Écran de chargement
  if (isLoading) {
    return (
      <View style={styles.loadingContainer}>
        <ActivityIndicator 
          size="large" 
          color={Config.COLORS.primary} 
          style={styles.spinner}
        />
        <Text style={styles.loadingText}>
          {Config.APP.NAME}
        </Text>
        <Text style={styles.loadingSubText}>
          Chargement en cours...
        </Text>
      </View>
    );
  }

  return (
    <Stack.Navigator
      screenOptions={{
        headerShown: false,
        cardStyle: { backgroundColor: Config.COLORS.background },
        animationEnabled: true,
        animationTypeForReplace: 'push',
      }}
    >
      {isAuthenticated ? (
        // Utilisateur connecté - Navigation principale de l'app
        <Stack.Screen 
          name="App" 
          component={AppNavigator}
          options={{
            animationTypeForReplace: 'push',
          }}
        />
      ) : (
        // Utilisateur non connecté - Navigation d'authentification
        <Stack.Screen 
          name="Auth" 
          component={AuthNavigator}
          options={{
            animationTypeForReplace: 'pop',
          }}
        />
      )}
    </Stack.Navigator>
  );
};

const styles = StyleSheet.create({
  loadingContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: Config.COLORS.background,
    padding: 20,
  },
  spinner: {
    marginBottom: 20,
  },
  loadingText: {
    fontSize: 24,
    fontWeight: 'bold',
    color: Config.COLORS.primary,
    marginBottom: 8,
    textAlign: 'center',
  },
  loadingSubText: {
    fontSize: 16,
    color: Config.COLORS.onSurface,
    opacity: 0.7,
    textAlign: 'center',
  },
});

export default RootNavigator;