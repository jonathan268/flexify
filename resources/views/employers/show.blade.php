@extends('layouts.app')

@section('title', 'Détails')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="rounded-lg shadow card">
        <div class="card-body">
            <h3 class="mb-5 fw-bolder text-success">Détails de l'employer</h3>

            <p>Identifiant : {{ $employer->id }} </p>
             <p>Nom : {{ $employer->nom }} </p>
              <p>Prénom : {{ $employer->prenom }} </p>
               <p>Email : {{ $employer->email }} </p>
                <p>Téléphone : {{ $employer->phone }} </p>
                 <p>Département : {{ $employer->departement_id }} </p>
                  <p>Prise de service : {{ $employer->hire_date }} </p>
                   <p>Salaire journalier : {{ $employer->daily_rate }} FCFA </p>
              <p>Date création  : {{ $employer->created_at }} </p>
              <p>Dernière modification : {{ $employer->updated_at }} </p><br>

               <a href="{{ route('employers.index') }}"><button class="btn btn-primary"> <-- Retour</button></a>
               <a href="{{ route('employers.edit', $employer->id) }}"><button class="btn btn-success"> Modifier les informations</button></a>



        </div>

    </div>
        </div>

    </div>



</div>



@endsection
