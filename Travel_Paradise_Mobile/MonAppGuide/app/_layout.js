// app/_layout.js
import { Stack } from 'expo-router';

export default function Layout() {
  return (
    <Stack
      screenOptions={{
        headerShown: true,
      }}
    >
      {/* La route par défaut est maintenant le login */}
      <Stack.Screen
        name="index" // Correspond à app/index.js (anciennement login.js)
        options={{ title: 'Authentification' }}
      />
      {/* La nouvelle page d'accueil */}
      <Stack.Screen
        name="home" // Correspond à app/home.js
        options={{ title: 'Accueil Guide' }}
      />
      <Stack.Screen
        name="visites/index"
        options={{ title: 'Liste des Visites' }}
      />
      <Stack.Screen
        name="visites/[id]"
        options={{ title: 'Détails de la Visite' }}
      />
    </Stack>
  );
}