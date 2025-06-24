// app/login.js - PAGE DE CONNEXION
import React, { useState } from 'react';
import { View, Text, TextInput, StyleSheet, Alert, ImageBackground, TouchableOpacity } from 'react-native';
import axios from 'axios';
import { useRouter } from 'expo-router';

const LoginScreen = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const router = useRouter();

  const handleLogin = async () => {
    try {
      // Assure-toi que l'URL de ton API est correcte et accessible depuis ton émulateur/appareil
      const response = await axios.post('http://192.168.0.228:8000/api/login_check', {
        email: email,
        password: password,
      });

      console.log('Token reçu:', response.data.token);
      Alert.alert('Succès', 'Connexion réussie !');

      // Navigation vers la page des visites en passant le token
      router.replace({ // Utilise replace pour que l'utilisateur ne puisse pas revenir au login avec le bouton retour
        pathname: '/visites',
        params: { token: response.data.token },
      });

    } catch (error) {
      console.error('Erreur de connexion:', error.response?.data || error.message);
      // Affiche un message d'erreur plus spécifique si possible
      let errorMessage = 'Identifiants invalides ou problème serveur.';
      if (error.response && error.response.data && error.response.data.message) {
        errorMessage = error.response.data.message;
      }
      Alert.alert('Erreur', errorMessage);
    }
  };

  return (
    <ImageBackground
      source={require('../assets/skyline4.jpg')} // Utilise la même image de fond pour la cohérence
      style={styles.backgroundImage}
      resizeMode="cover"
    >
      <View style={styles.overlay}>
        <View style={styles.contentContainer}>
          <Text style={styles.title}>Connexion Guide</Text>
          <TextInput
            style={styles.input}
            placeholder="Email"
            value={email}
            onChangeText={setEmail}
            keyboardType="email-address"
            autoCapitalize="none"
            placeholderTextColor="#aaa" // Couleur du placeholder
          />
          <TextInput
            style={styles.input}
            placeholder="Mot de passe"
            value={password}
            onChangeText={setPassword}
            secureTextEntry
            placeholderTextColor="#aaa"
          />
          <TouchableOpacity style={styles.loginButton} onPress={handleLogin}>
            <Text style={styles.loginButtonText}>Se connecter</Text>
          </TouchableOpacity>
        </View>
        <TouchableOpacity style={styles.backButton} onPress={() => router.push('/')}>
        <Text style={styles.backButtonText}>🏠 Retour à l'accueil</Text>
        </TouchableOpacity>
      </View>
    </ImageBackground>
  );
};

const styles = StyleSheet.create({
  backgroundImage: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  overlay: {
    flex: 1,
    backgroundColor: 'rgba(0, 0, 0, 0.7)', // Un peu plus sombre pour mieux faire ressortir les champs de saisie
    width: '100%',
    justifyContent: 'center',
    alignItems: 'center',
  },
  contentContainer: {
    width: '85%', // Prend une bonne partie de la largeur
    alignItems: 'center',
    backgroundColor: 'rgba(255, 255, 255, 0.1)', // Fond légèrement transparent pour le conteneur de saisie
    padding: 30,
    borderRadius: 15,
    borderWidth: 1,
    borderColor: 'rgba(255, 255, 255, 0.2)',
  },
  title: {
    fontSize: 32, // Un peu plus grand
    fontWeight: 'bold',
    color: '#ffffff',
    marginBottom: 30,
    textShadowColor: 'rgba(0, 0, 0, 0.75)',
    textShadowOffset: { width: -1, height: 1 },
    textShadowRadius: 10,
  },
  input: {
    width: '100%',
    height: 50, // Un peu plus grand pour les champs de saisie
    borderColor: 'rgba(255, 255, 255, 0.5)', // Bordure blanche semi-transparente
    borderWidth: 1,
    marginBottom: 20,
    paddingHorizontal: 15,
    backgroundColor: 'rgba(255, 255, 255, 0.2)', // Fond des champs de saisie
    borderRadius: 10,
    color: '#ffffff', // Texte blanc dans les champs
    fontSize: 16,
  },
  loginButton: {
    backgroundColor: 'rgba(151, 172, 230, 0.2)',
    paddingVertical: 15,
    paddingHorizontal: 40,
    borderRadius: 30,
    flexDirection: 'row',
    alignItems: 'center',
    elevation: 5,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.3,
    shadowRadius: 3,
    marginTop: 10, // Petit espace avant le bouton
  },
  loginButtonText: {
    color: '#ffffff',
    fontSize: 18,
    fontWeight: 'bold',
  },
  backButton: {
  marginTop: 15,
  backgroundColor: 'rgba(255, 255, 255, 0.2)',
  paddingVertical: 12,
  paddingHorizontal: 30,
  borderRadius: 30,
  elevation: 4,
  },
  backButtonText: {
    color: 'rgba(247, 240, 240, 0.91)',
    fontSize: 16,
    fontWeight: 'bold',
    textAlign: 'center',
  },

});

export default LoginScreen;