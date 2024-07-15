<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Patient</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<x-app-layout>
    <div class="container">
        <h1>Détails du Patient</h1>
        <div class="patient-details">
            <p><strong>ID:</strong> {{ $patient->id }}</p>
            <p><strong>Nom:</strong> {{ $patient->nom }}</p>
            <p><strong>Prénom:</strong> {{ $patient->prenom }}</p>
            <p><strong>Adresse:</strong> {{ $patient->adresse }}</p>
            <p><strong>Âge:</strong> {{ $patient->age }}</p>
            <p><strong>Téléphone:</strong> {{ $patient->telephone }}</p>
            <p><strong>Email:</strong> {{ $patient->email }}</p>
            <a href="{{ route('patients.index') }}" class="btn btn-retour">Retour à la liste</a>
        </div>
    </div>
</x-app-layout>
</body>
</html>
