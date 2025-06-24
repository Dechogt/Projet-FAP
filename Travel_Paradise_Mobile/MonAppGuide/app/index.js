// app/index.js (anciennement login.js)
import React, { useState } from 'react';
import { View, Text, TextInput, Button, StyleSheet, Alert } from 'react-native';
import axios from 'axios';
import { useRouter } from 'expo-router';

const LoginScreen = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const router = useRouter();

  const handleLogin = async () => {
    try {
      const response = await axios.post('http://192.168.0.228:8000/api/login_check', {
        email: email,
        password: password,
      });

      console.log('Token reçu:', response.data.token);
      Alert.alert('Succès', 'Connexion réussie !');

      // Navigation vers la route /home en passant le token
      router.push({
        pathname: '/home', // <-- Navigation vers /home
        params: { token: response.data.token },
      });

    } catch (error) {
      console.error('Erreur de connexion:', error.response?.data || error.message);
      Alert.alert('Erreur', 'Identifiants invalides ou problème serveur.');
    }
  };

  return (
    <View style={styles.container}>
      <Text style={styles.title}>Connexion Guide</Text>
      <TextInput
        style={styles.input}
        placeholder="Email"
        value={email}
        onChangeText={setEmail}
        keyboardType="email-address"
        autoCapitalize="none"
      />
      <TextInput
        style={styles.input}
        placeholder="Mot de passe"
        value={password}
        onChangeText={setPassword}
        secureTextEntry
      />
      <Button title="Se connecter" onPress={handleLogin} />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 20,
    backgroundColor: '#f5f5f5',
  },
  title: {
    fontSize: 24,
    marginBottom: 20,
    fontWeight: 'bold',
  },
  input: {
    width: '100%',
    height: 40,
    borderColor: '#ccc',
    borderWidth: 1,
    marginBottom: 15,
    paddingHorizontal: 10,
    backgroundColor: '#fff',
    borderRadius: 5,
  },
});

export default LoginScreen;