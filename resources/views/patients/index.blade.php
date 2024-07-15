<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Patients</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <x-app-layout>
    <div class="container">
        <h1>Tableau des Patients</h1>
        <div class="action-buttons">
            @if(Auth::user()->isAdmin())
                <a href="{{ route('patients.create') }}" class="btn btn-ajouter">Ajouter un Patient</a>
            @endif
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-deconnexion">Déconnexion</button>
            </form>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="rendezvous-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Âge</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    @if(Auth::user()->isAdmin())
                    <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
               @foreach($patients as $patient)
               <tr>
                   <td>{{ $patient->id }}</td>
                   <td>{{ $patient->nom }}</td>
                   <td>{{ $patient->prenom }}</td>
                   <td>{{ $patient->adresse }}</td>
                   <td>{{ $patient->age }}</td>
                   <td>{{ $patient->telephone }}</td>
                   <td>{{ $patient->email }}</td>
                   <td>
                        
                       @if(Auth::user()->isAdmin())
                            <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-detail"><img src="image/detail.svg" alt="detail"></a>
                           <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-modifier"><img src="image/modifier.svg" alt="modifier"></a>
                           <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?');"><img src="image/supprimer.svg" alt="supprimer"></button>
                           </form>
                       @endif
                   </td>
               </tr>
               @php
                    $i = 1;
                @endphp
               @endforeach
            </tbody>
        </table>
        <a href="{{ route('dashboard') }}" class="btn btn-retour"> Retour a dashboard </a>
    </div>
</x-app-layout>
</body>
</html>
