<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des Étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6 text-center">
        <h1 class="text-4xl font-semibold">Résultats des Étudiants</h1>
    </header>

    <!-- Content Section -->
    <main class="py-8 px-6">
        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <table class="w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">Nom de l'Étudiant</th>
                        <th class="px-4 py-2 text-left">Semestre</th>
                        <th class="px-4 py-2 text-left">Moyenne</th>
                        <th class="px-4 py-2 text-left">Validation</th>
                        <th class="px-4 py-2 text-left">Passage</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr class="border-t">
                        <td class="px-4 py-2">James Bond</td>
                        <td class="px-4 py-2">1er Semestre</td>
                        <td class="px-4 py-2">15.2</td>
                        <td class="px-4 py-2">Validé</td>
                        <td class="px-4 py-2">Oui</td>
                    </tr>
                    <!-- More rows can go here -->
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2024 Gestion des Notes | Tous droits réservés</p>
    </footer>

</body>
</html>
