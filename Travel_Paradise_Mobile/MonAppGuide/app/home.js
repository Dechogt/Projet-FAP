// app/home.js
import React from 'react';
import { View, Text, Button, StyleSheet } from 'react-native';
import { useRouter, useLocalSearchParams } from 'expo-router';

const HomeScreen = () => {
  const { token } = useLocalSearchParams(); // Récupère le token passé depuis le login
  const router = useRouter();

  const handleGoToVisites = () => {
    if (!token) {
      // Si pas de token, on retourne au login
      router.replace('/');
      return;
    }
    // Navigation vers la liste des visites, en passant le token
    router.push({
      pathname: '/visites',
      params: { token: token },
    });
  };

  return (
    <View style={styles.container}>
      <Text style={styles.welcomeText}>Bienvenue, Guide !</Text>
      <Text style={styles.instructions}>
        Prêt pour votre prochaine visite ?
      </Text>
      <Button title="Voir mes visites" onPress={handleGoToVisites} />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
    backgroundColor: '#e0f7fa', // Une couleur de fond différente pour l'accueil
  },
  welcomeText: {
    fontSize: 28,
    fontWeight: 'bold',
    marginBottom: 15,
    color: '#00796b',
  },
  instructions: {
    fontSize: 16,
    textAlign: 'center',
    marginBottom: 30,
    color: '#333',
  },
});

export default HomeScreen;