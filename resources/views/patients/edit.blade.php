<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Patient</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<x-app-layout>
    <div class="container">
        <a href="{{ route('patients.index') }}" class="btn btn-retour">Retour à la liste</a>
        <h1>Modifier le Patient</h1>
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ $patient->nom }}" required>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" value="{{ $patient->prenom }}" required>

            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" value="{{ $patient->adresse }}" required>

            <label for="age">Âge:</label>
            <input type="number" id="age" name="age" value="{{ $patient->age }}" required>

            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" value="{{ $patient->telephone }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $patient->email }}" required>

            <button type="submit" class="btn btn-modifier">Mettre à jour</button>
        </form>
    </div>
</x-app-layout>
</body>
</html>
