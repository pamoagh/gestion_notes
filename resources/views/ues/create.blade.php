<form action="{{ route('ues.store') }}" method="POST">
    @csrf
    <label for="code">Code :</label>
    <input type="text" name="code" id="code" required>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="credits_ects">Crédits ECTS :</label>
    <input type="number" name="credits_ects" id="credits_ects" min="1" max="30" required>

    <label for="semestre">Semestre :</label>
    <input type="number" name="semestre" id="semestre" min="1" max="6" required>

    <button type="submit">Ajouter</button>
</form>
