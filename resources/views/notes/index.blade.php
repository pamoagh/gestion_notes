<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6 text-center">
        <h1 class="text-4xl font-semibold">Gestion des Notes</h1>
    </header>

    <!-- Content Section -->
    <main class="py-8 px-6">
        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <form action="#" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="etudiant" class="block text-lg font-medium">Nom de l'Étudiant</label>
                        <input type="text" id="etudiant" name="etudiant" class="mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
                    </div>
                    <div>
                        <label for="ue" class="block text-lg font-medium">Unité d'Enseignement (UE)</label>
                        <input type="text" id="ue" name="ue" class="mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
                    </div>
                    <div>
                        <label for="note" class="block text-lg font-medium">Note</label>
                        <input type="number" id="note" name="note" min="0" max="20" class="mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
                    </div>
                    <div>
                        <label for="session" class="block text-lg font-medium">Session</label>
                        <select id="session" name="session" class="mt-2 p-3 border border-gray-300 rounded-lg w-full">
                            <option value="normale">Normale</option>
                            <option value="rattrapage">Rattrapage</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg text-lg font-medium shadow-md hover:bg-blue-700 transform hover:scale-105 transition duration-300 ease-in-out">Enregistrer la Note</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2024 Gestion des Notes | Tous droits réservés</p>
    </footer>

</body>
</html>
