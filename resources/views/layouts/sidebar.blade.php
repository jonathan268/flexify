<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion shadow" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book-open "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Flexify <sup>v1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Administration
            </div>

             <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('departements.index') }}">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Département</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employers.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Employers</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Finance
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('salaires.index') }}">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Salaire</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Configuration
            </div>

             <!-- Nav Item - Configuration -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings.index') }}">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Paramètres</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
