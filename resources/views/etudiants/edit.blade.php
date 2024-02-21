@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Étudiant</h1>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Retour</a>
            Étudiant #{{ $etudiant->id }}
        </div>
        <div class="card-body">
            <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiant->nom }}">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $etudiant->adresse }}">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $etudiant->telephone }}">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $etudiant->email }}">
                </div>
                <div class="form-group">
                    <label for="date_naissance">Date de Naissance :</label>
                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $etudiant->date_naissance }}">
                </div>
                <div class="form-group">
                    <label for="ville_id">Ville :</label>
                    <select class="form-control" id="ville_id" name="ville_id">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ $etudiant->ville_id == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                        @endforeach
                        
                    </select>
                    
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-primary">Retour à la liste</a>
              
                <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                
            </form>
            
        </div>
        
    </div>
    
</div>

@endsection
