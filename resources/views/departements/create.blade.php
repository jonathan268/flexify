@extends('layouts.app')

@section('title', 'Ajout département')

@section('content')
    <div class="py-4 col-md-4">
            <div class="p-5 py-4 bg-white rounded-lg shadow">
                <form action="{{ route('departements.store') }}" method="post">

                @csrf

                <h4 class="text-bold text-primary"> Nouveau département</h4><br>

                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="mb-2 form-control" placeholder="" name="name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="mb-2 form-control" name="description">
                </div>
                <button class="p-2 btn btn-primary" type="submit">Ajout</button>
            </form>
            </div>
        </div>




@endsection
