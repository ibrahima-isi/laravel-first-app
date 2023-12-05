<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Classe::all();
        return view('formation', ['formations' => $formations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formation = new Classe();
        return view('vue_ajoutFormation', ['obj_formation' => $formation]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $frmtn = new Classe();
        $frmtn->nom_formation = $request->nom;
        $frmtn->duree_formation = $request->duree;
        $frmtn->prix = $request->prix;
        $frmtn->save();

        return to_route('formation');
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
