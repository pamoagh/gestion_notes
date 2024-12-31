@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Résultats des Étudiants</h1>
        
        <!-- Affichage des résultats par étudiant -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Étudiant</th>
                    <th>Nom</th>
                    <th>Semestre</th>
                    <th>Moyenne</th>
                    <th>Validation UE</th>
                    <th>Passage à l'année suivante</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultats as $resultat)
                    <tr>
                        <td>{{ $resultat->etudiant_id }}</td>
                        <td>{{ $resultat->nom }}</td>
                        <td>{{ $resultat->semestre }}</td>
                        <td>{{ number_format($resultat->moyenne, 2) }}</td>
                        <td>{{ $resultat->validation ? 'Validé' : 'Non Validé' }}</td>
                        <td>{{ $resultat->passage ? 'Oui' : 'Non' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
