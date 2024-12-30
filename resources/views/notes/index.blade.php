<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Notes</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tableau des Notes</h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Etudiant</th>
                    <th>EC</th>
                    <th>Note</th>
                    <th>Session</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <td>{{ $note->etudiant->nom }} {{ $note->etudiant->prenom }}</td>
                        <td>{{ $note->ec->code }} - {{ $note->ec->nom }}</td>
                        <td>{{ $note->note }}</td>
                        <td>{{ ucfirst($note->session) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
