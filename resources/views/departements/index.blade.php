@extends('layouts.app')

@section('title', 'Liste des départements')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="mb-4 text-gray-800 h3">Liste des départements</h1>

                    <!-- DataTales Example -->
                    <div class="mb-4 shadow card">
                        <div class="py-3 card-header">
                            <a href="{{ route('departements.create') }}"><button class="btn btn-success">Nouveau département</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($departements as $departement )

                                        <tr>
                                            <td>{{ $departement->id }}</td>
                                            <td>{{ $departement->name }}</td>
                                             <td>
                                                <a href="{{ route('departements.edit', $departement->id) }}"><button class="mb-2 btn"><i class="fa fa-edit"></i></button></a>
                                                <form action="{{ route('departements.destroy', $departement->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="mb-2 btn"><i class="fa fa-trash"></i></button>


                                                </form>
                                                <a href="{{ route('departements.show', $departement->id) }}"><button class="mb-2 btn"><i class="fa fa-eye"></i></button></a>
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
