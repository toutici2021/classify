
<nav class="navbar navbar-expand-lg header py-1">
    <div class="container custom-container">
        <!-- Brand -->
        <div>
            <a href="javascript:void(0)" class="navbar-toggler aside-toggler">
                <i class="fa fa-indent text-light-muted"></i>
            </a>
            <!-- Brand -->
            <a class="navbar-brand" href="{{route('rootPath')}}">
                <img src="{{asset('public/frontend/images/ui-default/logo.png')}}" class="img-fluid">
            </a>
        </div>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler animated-hamburgers collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="ml-auto">
                <ul class="navbar-nav header-nav-menu">
                    <li class="nav-item">
                        <a href="{{route('rootPath')}}" class="nav-link">@lang('default.home')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('categories')}}" class="nav-link">@lang('default.categories')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('adsListing')}}" class="nav-link">@lang('default.ads')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <!--============  After Login =============-->
                    <li class="nav-item dropdown mr-0">
                        <a href="#" data-toggle="dropdown" class="d-flex align-items-center nav-link py-lg-1">
                            <span class="box-30 border rounded-circle">
                                <i class="fa fa-user-o"></i>
                            </span>
                            <span class="d-lg-none ml-2">Mon compte</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-tool">
                            <a href="{{route('home')}}" class="d-flex dropdown-item py-2 text-muted text-15"><span class="box-20 mr-2"><i class="fa fa-sign-in"></i></span> @lang('default.dashboard')</a>
                            <a href="{{route('logout')}}" class="d-flex dropdown-item py-2 text-muted text-15"><span class="box-20 mr-2"><i class="fa fa-user-plus"></i></span> @lang('default.logout')</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
