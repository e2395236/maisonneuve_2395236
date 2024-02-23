@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Villes</h2>
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
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($villes as $ville)
            <tr>
                <td>{{ $ville->id }}</td>
                <td>
                    <form action="{{ route('villes.update', $ville->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-0">
                            <input type="text" name="nom" class="form-control" value="{{ $ville->nom }}">
                        </div>
                </td>
                <td>
                    <button type="submit" class="btn btn-success btn-sm">Sauvegarder</button>
                    </form>
                    <form action="{{ route('villes.destroy', $ville->id) }}" method="POST" style="display:inline;">
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
@endsection




    