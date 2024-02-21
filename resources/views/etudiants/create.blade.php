@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un étudiant</h1>
        <form action="{{ route('etudiants.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance :</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
                
            <div class="form-group">
                <label for="ville_id">Ville :</label>
                <select class="form-control" id="ville_id" name="ville_id" required>
                    @foreach($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                    @endforeach
                    
                </select>
                
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Retour à la liste</a>
          
            
        </form>
        
    </div>
    
</div>

@endsection

