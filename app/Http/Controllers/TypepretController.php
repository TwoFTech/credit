<?php

namespace App\Http\Controllers;

use App\Models\Typepret;
use Illuminate\Http\Request;

class TypepretController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // (Optionnel) Affiche tous les types de prêt
    public function index()
{
    $typeprets = Typepret::all(); // Récupérer tous les types de prêts
    return view('dashboard/pages/typeprets/.index', compact('typeprets')); // Passer les types de prêts à la vue
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $typepret = new Typepret();

        // Passer l'objet à la vue
        return view('dashboard/pages/typeprets/create', compact('typepret'));
    }

    // Stocke le nouveau type de prêt dans la base de données
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'nompret' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Création du nouveau type de prêt
        Typepret::create([
            'nompret' => $request->nompret,
            'description' => $request->description,
        ]);

        // Redirection vers une page avec un message de succès
        return redirect()->route('typeprets.index')->with('success', 'Type de prêt ajouté avec succès.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Typepret $typepret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $typepret = Typepret::findOrFail($id); // Récupérer le type de prêt à modifier
        return view('dashboard.pages.typeprets.create', compact('typepret')); // Passer l'objet à la même vue
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'nompret' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Récupérer le type de prêt à mettre à jour
        $typepret = Typepret::findOrFail($id);

        // Mettre à jour les données
        $typepret->nompret = $request->nompret;
        $typepret->description = $request->description;
        $typepret->save(); // Enregistrer les modifications

        // Redirection avec un message de succès
        return redirect()->route('typeprets.index')->with('success', 'Type de prêt mis à jour avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Récupérer le type de prêt à supprimer
    $typepret = Typepret::findOrFail($id);

    // Supprimer le type de prêt
    $typepret->delete();

    // Redirection avec un message de succès
    return redirect()->route('typeprets.index')->with('success', 'Type de prêt supprimé avec succès.');
}

}
