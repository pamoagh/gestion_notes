<table>
    <thead>
        <tr>
            <th>Code UE</th>
            <th>Nom</th>
            <th>ECTS</th>
            <th>Semestre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ues as $ue)
            <tr>
                <td>{{ $ue->code }}</td>
                <td>{{ $ue->nom }}</td>
                <td>{{ $ue->credits_ects }}</td>
                <td>S{{ $ue->semestre }}</td>
                <td>
                    <!-- Actions comme modifier, supprimer -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
