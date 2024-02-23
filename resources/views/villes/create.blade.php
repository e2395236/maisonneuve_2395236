@extends('layouts.app')

@section('content')
<div class="container">

<h1>Ajouter une nouvelle ville</h1>

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
    <form action=" {{ route('villes.store') }} " method="POST">

        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

@endsection