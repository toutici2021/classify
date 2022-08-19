<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <a class="ml-2 btn btn-danger" target="_blank" href="{{route('rootPath')}}"><i class="fa fa-home"></i> Voir le site</a>
    <ul class="navbar-nav ml-auto">
        <div class="user-panel d-flex">
            <div class="info">
                <a href="#" class="d-block">Connecté en tant que {{Auth::user()->full_name}}</a>
            </div>
        </div>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle" style="color: #cc2424 !important;"></i>
                <span class="badge badge-warning navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <div class="dropdown-divider"></div>
                <a href="{{route('edit-profile')}}" class="dropdown-item">
                    <i class="fas fa-user-circle mr-2" style="color: #cc2424 !important;"></i> {{__('default.edit_profile')}}
                    <span class="float-right text-muted text-sm"></span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('change_password')}}" class="dropdown-item">
                    <i class="fas fa-lock-open mr-2" style="color: #cc2424 !important;"></i> {{__('default.change_password')}}
                    <span class="float-right text-muted text-sm"></span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{route('logout')}}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2" style="color: #cc2424 !important;"></i> {{__('default.logout')}}
                    <span class="float-right text-muted text-sm"></span>
                </a>
                <div class="dropdown-divider"></div>

            </div>
        </li>


    </ul>
</nav>
