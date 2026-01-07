<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = Employer::all();
        return view('employers.index', compact('employers'));
    }

     public function count(){

         $totalemployer = Employer::count();
          return view('dashboard.index', compact('totalemployer'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'email'=> 'required|unique:email',
            'phone'=> 'required|numeric',
            'departement_id'=> 'required',
            'hire_date'=> 'required|date',
            'daily_rate'=> 'required|numeric',
        ]);

        Employer::created([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'departement_id'=>$request->departement_id,
            'hire_date'=>$request->hire_date,
            'daily_date'=>$request->daily_rate,
        ]);

        return redirect()->route('employers.index')->with('success', 'Employé ajouté avec succès');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employer = Employer::find($id);
        return view('employers.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employer = Employer::find($id);
        return view('employers.edit', compact('employer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=> 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'email'=> 'required|unique:email',
            'phone'=> 'required|numeric',
            'departement_id'=> 'required',
            'hire_date'=> 'required|date',
            'daily_rate'=> 'required|numeric',
        ]);

        $employer = Employer::find($id);
        $employer->update($request->all());
        return redirect()->route('employers.index')->with('success', 'Employé modifié avec succès');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employer = Employer::find($id);
        $employer->delete();
        return redirect()->route('employers.index')->with('success', 'Employé supprimé avec succès' );
    }
}
