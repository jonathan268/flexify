@extends('layouts.app')

@section('title', 'Détails')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="rounded-lg shadow card">
        <div class="card-body">
            <h3 class="mb-5 fw-bolder text-success">Détails du département</h3>

            <p>Identifiant : {{ $departement->id }} </p>
             <p>Nom : {{ $departement->name }} </p>
              <p>Description : {{ $departement->description }} </p>
              <p>Date création  : {{ $departement->created_at }} </p>
              <p>Dernière modification : {{ $departement->updated_at }} </p><br>

              <a href="{{ route('departements.index') }}"><button class="btn btn-primary"> Retour</button></a>
              <a href="{{ route('departements.edit', $departement->id) }}"><button class="btn btn-warning"> Modifier</button></a>


        </div>

    </div>
        </div>

    </div>



</div>



@endsection
