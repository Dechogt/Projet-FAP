// app/_layout.js
import { Stack } from 'expo-router';

export default function Layout() {
  return (
    <Stack
      screenOptions={{
        headerShown: true,
        headerStyle: {
          backgroundColor: '#5619e5',
        },
        headerTintColor: '#ffffff',
        headerTitleStyle: {
          fontWeight: 'bold',
        },
        headerTitle: 'TravelParadise', // 👈 Ajoutez cette ligne
      }}
    >
      {/* Page d'accueil */}
      <Stack.Screen
        name="index"
        options={{ title: 'Accueil', headerShown: false }}
      />
      {/* Page de connexion */}
      <Stack.Screen
        name="login"
        options={{ title: 'Connexion Guide', headerShown: false }}
      />
      {/* Autres pages */}
      <Stack.Screen
        name="visites/index"
        options={{ title: 'Mes Visites' }} // Le titre spécifique remplacera "TravelParadise" ici
      />
      <Stack.Screen
        name="visites/[id]"
        options={{ title: 'Détails Visite' }}
      />
    </Stack>
  );
}