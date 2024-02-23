<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisonneuve_2395236</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>


    <style>
        body {
            padding-top: 50px;
        }
        .content {
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-thumbnail" width="30" height="30"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/etudiants">Étudiants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/etudiants/create">Ajouter un étudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/villes">Villes</a>
                </li>
              
            </ul>
        </div>
    </header>
    <br>
    <br>

    <!-- Contenu principal -->
    <main role="main" class="container">
        @yield('content')
    </main>
<footer class="footer mt-auto py-3 bg-light text-center">
    <p class="small">&copy; 2024 Maisonneuve_2395236. Tous droits réservés.</p>
</footer>
    <!-- Scripts JavaScript pour Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@