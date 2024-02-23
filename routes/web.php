<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Affichage de la liste des étudiants
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');

// Formulaire de création d'un nouvel étudiant
Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');

// Enregistrement d'un nouvel étudiant
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');

// Affichage d'un étudiant sélectionné
Route::get('/etudiants/{etudiant}', [EtudiantController::class, 'show'])->name('etudiants.show');

// Formulaire de mise à jour d'un étudiant
Route::get('/etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');

// Mise à jour d'un étudiant
Route::put('/etudiants/{etudiant}', [EtudiantController::class, 'update'])->name('etudiants.update');

// Suppression d'un étudiant
Route::delete('/etudiants/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');


// Affichage de la liste des villes
Route::get('/villes', [VilleController::class, 'index'])->name('villes.index');

// Formulaire de création d'une nouvelle ville
Route::get('/villes/create', [VilleController::class, 'create'])->name('villes.create');

// Enregistrement d'une nouvelle ville
Route::post('/villes', [VilleController::class, 'store'])->name('villes.store');

// Affichage d'une ville sélectionée
Route::get('/villes/{ville}', [VilleController::class, 'show'])->name('villes.show');

// Formulaire de mise à jour d'une ville
Route::get('/villes/{ville}/edit', [VilleController::class, 'edit'])->name('villes.edit');

// Mise à jour d'une ville
Route::put('/villes/{ville}', [VilleController::class, 'update'])->name('villes.update');

// Suppression d'une ville
Route::delete('/villes/{ville}', [VilleController::class, 'destroy'])->name('villes.destroy');
