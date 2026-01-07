<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Employer;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return view('departements.index', compact('departements'));
    }

    public function count(){

         $totaldepartement = Departement::count();
          return view('dashboard.index', compact('totaldepartement'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('departements.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',

        ]);

        Departement::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('departements.index')->with('sucess', 'Dépârtement ajouté avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $departement = Departement::find($id);
        return view('departements.show', compact('departement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departement = Departement::find($id);
        return view('departements.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',

        ]);

        $departement = Departement::find($id);
        $departement->update($request->all());
        return redirect()->route('departements.index')->with('success', 'Département modifié avec succès');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departement = Departement::find($id);
        $departement->delete();
        return redirect()->route('departements.index')->with('success', 'Département supprimé avec succès');
    }
}
