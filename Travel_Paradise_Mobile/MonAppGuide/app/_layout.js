// app/_layout.js
import { Stack } from 'expo-router';

export default function Layout() {
  return (
    <Stack
      screenOptions={{
        headerShown: true,
        headerStyle: {
          backgroundColor: '#00796b',
        },
        headerTintColor: '#ffffff',
        headerTitleStyle: {
          fontWeight: 'bold',
        },
      }}
    >
      {/* Page d'accueil - PREMIÈRE PAGE (point d'entrée) */}
      <Stack.Screen
        name="index" // Correspond à app/index.js (page d'accueil)
        options={{ title: 'Accueil', headerShown: false }}
      />
      {/* Page de connexion - APRÈS avoir cliqué sur "Se connecter" */}
      <Stack.Screen
        name="login" // Correspond à app/login.js (page de connexion)
        options={{ title: 'Connexion Guide', headerShown: false }}
      />
      <Stack.Screen
        name="visites/index"
        options={{ title: 'Mes Visites' }}
      />
      <Stack.Screen
        name="visites/[id]"
        options={{ title: 'Détails Visite' }}
      />
    </Stack>
  );
}