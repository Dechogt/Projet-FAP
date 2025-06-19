import React, { useState, useEffect } from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { Provider as PaperProvider } from 'react-native-paper';
import { StatusBar } from 'expo-status-bar';
import * as SecureStore from 'expo-secure-store';

// Screens
import LoginScreen from './src/screens/LoginScreen.js';
import HomeScreen from './src/screens/HomeScreen.js';
import VisitDetailScreen from './src/screens/VisitDetailScreen.js';
import LoadingScreen from './src/screens/LoadingScreen.js';

// Services
import { AuthService } from './src/services/AuthService.js';

// Theme
import { theme } from './src/theme/theme.js';

const Stack = createStackNavigator();

export default function App() {
  const [isAuthenticated, setIsAuthenticated] = useState(false);
  const [isLoading, setIsLoading] = useState(true);
  const [user, setUser] = useState(null);

  useEffect(() => {
    checkAuthState();
  }, []);

  const checkAuthState = async () => {
    try {
      const token = await SecureStore.getItemAsync('jwt_token');
      const userData = await SecureStore.getItemAsync('user_data');
      
      if (token && userData) {
        // Vérifier que le token est encore valide
        const isValid = await AuthService.validateToken(token);
        if (isValid) {
          setUser(JSON.parse(userData));
          setIsAuthenticated(true);
        } else {
          // Token expiré, nettoyer le stockage
          await SecureStore.deleteItemAsync('jwt_token');
          await SecureStore.deleteItemAsync('user_data');
        }
      }
    } catch (error) {
      console.error('Erreur lors de la vérification de l\'authentification:', error);
    } finally {
      setIsLoading(false);
    }
  };

  const handleLogin = async (userData, token) => {
    try {
      await SecureStore.setItemAsync('jwt_token', token);
      await SecureStore.setItemAsync('user_data', JSON.stringify(userData));
      setUser(userData);
      setIsAuthenticated(true);
    } catch (error) {
      console.error('Erreur lors de la sauvegarde des données d\'authentification:', error);
    }
  };

  const handleLogout = async () => {
    try {
      await SecureStore.deleteItemAsync('jwt_token');
      await SecureStore.deleteItemAsync('user_data');
      setUser(null);
      setIsAuthenticated(false);
    } catch (error) {
      console.error('Erreur lors de la déconnexion:', error);
    }
  };

  if (isLoading) {
    return <LoadingScreen />;
  }

  return (
    <PaperProvider theme={theme}>
      <StatusBar style="auto" />
      <NavigationContainer>
        <Stack.Navigator
          screenOptions={{
            headerStyle: {
              backgroundColor: theme.colors.primary,
            },
            headerTintColor: '#fff',
            headerTitleStyle: {
              fontWeight: 'bold',
            },
          }}
        >
          {!isAuthenticated ? (
            <Stack.Screen 
              name="Login" 
              options={{ headerShown: false }}
            >
              {props => (
                <LoginScreen 
                  {...props} 
                  onLogin={handleLogin}
                />
              )}
            </Stack.Screen>
          ) : (
            <>
              <Stack.Screen 
                name="Home" 
                options={{ title: 'Mes Visites' }}
              >
                {props => (
                  <HomeScreen 
                    {...props} 
                    user={user}
                    onLogout={handleLogout}
                  />
                )}
              </Stack.Screen>
              <Stack.Screen 
                name="VisitDetail" 
                component={VisitDetailScreen}
                options={({ route }) => ({ 
                  title: route.params?.visit?.titre || 'Détail de la visite' 
                })}
              />
            </>
          )}
        </Stack.Navigator>
      </NavigationContainer>
    </PaperProvider>
  );
}