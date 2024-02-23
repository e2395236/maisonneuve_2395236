<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $villes = Ville::all();
        return view('villes.index', ['villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('villes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ville = new Ville();
        $ville->nom = $request->nom;
        $ville->save();
        return redirect()->route('villes.index')->with('success', 'Ville ajoutée avec succès !'); 
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        //

        return view('villes.edit', ['ville' => $ville]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);
    
        $ville = Ville::findOrFail($id);
        $ville->nom = $request->nom;
        $ville->save();
    
        return redirect()->route('villes.index')->with('success', 'Nom de la ville mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        //

        $ville->delete();
        return redirect()->route('villes.index')->with('success', 'Ville supprimée avec succès !');
    }
}
