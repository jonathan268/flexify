@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="p-2 mb-4 d-sm-flex align-items-center justify-content-between">
            <h1 class="mb-0 text-gray-800 h3">Tableau de bord</h1>
            <a href="" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-success"><i
                    class="fas fa-download fa-sm text-white-50"></i> Générer une fiche de paie</a>
        </div>

        <!-- Content Row -->
        <div class="py-2 row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="py-2 shadow card border-left-primary h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                    Total Employers</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">150</div>
                            </div>
                            <div class="col-auto">
                                <i class="text-gray-300 fas fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="py-2 shadow card border-left-success h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                    Total Départements</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold"> </div>
                            </div>
                            <div class="col-auto">
                                <i class="text-gray-300 fas fa-school fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="py-2 shadow card border-left-info h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Masse salariale
                                </div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">45</div>
                            </div>
                            <div class="col-auto">
                                <i class="text-gray-300 fas fa-money-bill fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="mb-4 col-xl-3 col-md-6">
                <div class="py-2 shadow card border-left-warning h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="mr-2 col">
                                <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                    Dernières fiches générées</div>
                                <div class="mb-0 text-gray-800 h5 font-weight-bold">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="mb-4 shadow card">
                    <!-- Card Header - Dropdown -->
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="text-gray-400 fas fa-ellipsis-v fa-sm fa-fw"></i>
                            </a>
                            <div class="shadow dropdown-menu dropdown-menu-right animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="mb-4 shadow card">
                    <!-- Card Header - Dropdown -->
                    <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="text-gray-400 fas fa-ellipsis-v fa-sm fa-fw"></i>
                            </a>
                            <div class="shadow dropdown-menu dropdown-menu-right animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="pt-4 pb-2 chart-pie">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Direct
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Social
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->


@endsection
