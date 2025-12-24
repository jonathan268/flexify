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
                            <h6 class="m-0 font-weight-bold text-primary">Détails </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom et Prénom</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Département</th>
                                            <th>Jour de début</th>
                                            <th>Salaire journalier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                            <td>
                                                <button class="p-1 mx-2 mb-2 btn btn-success"><i class="fa fa-edit"></i></button>
                                                <button class="p-1 mx-2 mb-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John Doe</td>
                                            <td>Java Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                            <td>
                                                <button class="p-1 mx-2 mb-2 btn btn-success"><i class="fa fa-edit"></i></button>
                                                <button class="p-1 mx-2 mb-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



@endsection
