<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unités d'Enseignement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6 text-center">
        <h1 class="text-4xl font-semibold">Unités d'Enseignement</h1>
    </header>

    <!-- Content Section -->
    <main class="py-8 px-6">
        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <table class="w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">Code</th>
                        <th class="px-4 py-2 text-left">Nom</th>
                        <th class="px-4 py-2 text-left">Semestre</th>
                        <th class="px-4 py-2 text-left">Crédits ECTS</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr class="border-t">
                        <td class="px-4 py-2">UE123</td>
                        <td class="px-4 py-2">Introduction à l'Informatique</td>
                        <td class="px-4 py-2">1er Semestre</td>
                        <td class="px-4 py-2">6</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Modifier</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Supprimer</a>
                        </td>
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
