@extends('layouts.app')

@section('title', 'Liste des départements')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="mb-3 text-gray-800 h3">Liste des employés</h1>

                    <!-- DataTales Example -->
                    <div class="mb-4 shadow card">
                        <div class="py-3 card-header">
                             <a href="{{ route('employers.create') }}"><button class="btn btn-success">Ajout employé</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Département</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employers as $employer )


                                        <tr>
                                            <td>{{$employer->id }}</td>
                                            <td>{{ $employer->nom }}</td>
                                            <td>{{ $employer->prenom }}</td>
                                            <td>{{ $employer->departement_id }}</td>
                                            <td>
                                                <a href="{{ route('employers.edit', $employer->id) }}"><button class="p-1 mx-2 mb-2 btn"><i class="fa fa-edit"></i></button></a>
                                                <a href="{{ route('employers.destroy', $employer->id) }}"><button class="p-1 mx-2 mb-2 btn"><i class="fa fa-trash"></i></button></a>
                                                <a href="{{ route('employers.show', $employer->id) }}"><button class="p-1 mx-2 mb-2 btn"><i class="fa fa-eye"></i></button></a>
                                            </td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



@endsection
