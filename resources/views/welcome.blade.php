@extends ('layouts.app')

@section('title', 'Accueil')

@section('content')

<div class="container-fluid">
    <div class="jumbotron">

      
            <h1 class="display-5">Bienvenue !</h1>
            <p>Site offificiel des étudiants du Collège Maisonneuve.</p>
            <a href="/etudiants" class="btn btn-outline-primary">Voir les étudiants</a>
        </div>
   
        </div>
<div class="container">
  
    
<img src=" {{ asset('images/college-2.jpeg') }}" alt="College" class="img-fluid">
</div>




@endsection
