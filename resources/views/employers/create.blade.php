@extends('layouts.app')

@section('title', 'Ajout employé')

@section('content')

<div class="row">

    <div class="py-4 col-md-12">
            <div class="p-5 py-4 bg-white rounded-lg shadow">
                <form action="{{ route('employers.store') }}" method="post">

                @csrf

                <h4 class="text-bold text-primary"> Nouvel employé</h4><br>

                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="mb-2 form-control" placeholder="" name="name">
                </div>
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="mb-2 form-control" name="prenom">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="mb-2 form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="number" class="mb-2 form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Département</label>
                    <select name="departement_id">
                        <option></option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Jour d'embauche</label>
                    <input type="date" class="mb-2 form-control" name="hire_date">
                </div>
                <div class="form-group">
                    <label>Salaire journalier</label>
                    <input type="number" class="mb-2 form-control" name="daily_rate">
                </div>
                <button class="p-2 btn btn-primary" type="submit">Ajout</button>
            </form>
            </div>
        </div>


</div>

@endsection
