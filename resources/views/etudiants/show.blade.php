@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Étudiant</h1>
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
    <div class="card">
        <div class="card-header">
          
            Étudiant #{{ $etudiant->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $etudiant->nom }}</h5>
            <p class="card-text"><strong>Adresse :</strong> {{ $etudiant->adresse }}</p>
            <p class="card-text"><strong>Téléphone :</strong> {{ $etudiant->telephone }}</p>
            <p class="card-text"><strong>Email :</strong> {{ $etudiant->email }}</p>
            <p class="card-text"><strong>Date de Naissance :</strong> {{ $etudiant->date_naissance }}</p>
            <p class="card-text"><strong>Ville :</strong> {{ $etudiant->ville->nom ?? 'Non renseigné' }}</p>
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Retour à la liste</a>
            <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
