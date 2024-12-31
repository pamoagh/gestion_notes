<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
  font-family: 'Poppins', sans-serif;
}
    </style>
</head>
<body class="bg-gray-50">

    <!-- Hero Section -->
    <section class="h-screen bg-gradient-to-r from-blue-600 to-blue-800 flex items-center justify-center text-center text-white">
        <div class="max-w-4xl p-6 md:p-12 bg-white bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg">
            <h1 class="text-5xl md:text-6xl font-semibold mb-4 text-white">Bienvenue sur la Gestion des Notes</h1>
            <p class="text-xl md:text-2xl mb-8">Outil moderne et intuitif pour la gestion académique et des résultats.</p>
            
            <!-- Call-to-Action Buttons -->
            <div class="flex justify-center gap-6">
                <a href="{{ route('ues.index') }}" class="px-8 py-3 bg-blue-600 text-white rounded-lg text-lg font-medium shadow-md hover:bg-blue-700 transform hover:scale-105 transition duration-300 ease-in-out">Unités d'Enseignement</a>
                <a href="{{ route('notes.index') }}" class="px-8 py-3 bg-gray-600 text-white rounded-lg text-lg font-medium shadow-md hover:bg-gray-700 transform hover:scale-105 transition duration-300 ease-in-out">Notes</a>
                <a href="{{ route('resultats.afficher') }}" class="px-8 py-3 bg-indigo-600 text-white rounded-lg text-lg font-medium shadow-md hover:bg-indigo-700 transform hover:scale-105 transition duration-300 ease-in-out">Résultats</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2024 Gestion des Notes | Tous droits réservés</p>
    </footer>

</body>
</html>
