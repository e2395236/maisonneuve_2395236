@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="container mt-3">


    <h1>Liste des Étudiants</h1>
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
        <form action="/etudiants" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher un étudiant..." name="q">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">Ajouter un nouvel étudiant</a>
    <a href="{{ route('villes.create') }}" class="btn btn-primary">Ajouter une ville</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->id }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->adresse }}</td>
                <td>{{ $etudiant->telephone }}</td>
                <td>{{ $etudiant->email }}</td>
                <td>{{ \Carbon\Carbon::parse($etudiant->date_naissance)->format('d/m/Y') }}</td>

                <td>{{ $etudiant->ville_id ? $etudiant->ville_id : 'Pas de ville' }}</td>

                <td>
                    <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
