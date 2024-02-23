<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Ville;

use Illuminate\Http\Request;



class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $villes = Etudiant::select('ville_id')->distinct()->get();
        return view('etudiants.index', ['etudiants' => $etudiants , 'villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $villes = Ville::all();
        return view('etudiants.create', ['villes' => $villes, ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant();
      
        $etudiant->nom = $request->nom;
        $etudiant->adresse = $request->adresse;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->ville_id = $request->ville_id;
        $etudiant->save();

        return redirect()->route('etudiants.index')->with('success', 'Étudiant ajouté avec succès !');
      
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiants.show', compact('etudiant'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $villes = Ville::all();
        return view('etudiants.edit', compact('etudiant') + array('villes' => $villes));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiants = Etudiant::find($id);
        $etudiants->nom = $request->nom;
        $etudiants->adresse = $request->adresse;
        $etudiants->telephone = $request->telephone;
        $etudiants->email = $request->email;
        $etudiants->date_naissance = $request->date_naissance;
        $etudiants->ville_id = $request->ville_id;
        $etudiants->save();

        return redirect()->route('etudiants.show', $etudiants->id)->with('success', 'Étudiant mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiants = Etudiant::find($id);
        $etudiants->delete();
        
       return redirect('/etudiants')->with('success', 'Étudiant supprimé avec succès !');
    }
}
