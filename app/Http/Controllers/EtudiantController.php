<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $liste_etudiant = Etudiant::all();
        return view('etudiant', ['etudiants' => $liste_etudiant]);
    }

    /**
     * Show the form for creating a new resource.
     * Dans la methode create j'instancie un objet de type @Etudiant pour l'envoyer dans le formulaire et
     * recuperer les data du formulaires dans cet objet
     */
    public function create()
    {
        $new_etudiant = new Etudiant();
        return view('vue_ajoutEtudiant', ['obj_etudiant' => $new_etudiant]);
    }

    /**
     * Store a newly created resource in storage.
     * Dans store, je recupere les données envoyées par le formulaire et je les enverrai a la base de données
     */
    public function store(Request $request)
    {
        $new_etudiant = new Etudiant();
        $new_etudiant->nom = $request->nom;
        $new_etudiant->prenom = $request->prenom;
        $new_etudiant->age = $request->age;
        $new_etudiant->save();

        return to_route('etudiant');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
