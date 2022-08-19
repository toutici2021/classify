<nav class="navbar navbar-expand bg-brand-primary topbar py-1">
    <div class="container custom-container px-lg-3">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link py-1 text text-13 font-weight-medium text-white"><i
                            class="fa fa-phone mr-1"></i>  {{get_option('site_phone_number')}} </span>
                </li>
                <li class="nav-item">
                    <span class="nav-link py-1 text text-13 font-weight-medium text-white"><i
                            class="fa fa-envelope mr-1"></i> {{env('MAIL_FROM_ADDRESS')}} </span>
                </li>
            </ul>
        </div>
        <div class="d-lg-down-none">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{get_option('facebook_url')}}" target="_blank" class="nav-link py-1 text-13 text-white"><i
                            class="fa fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="{{get_option('twitter_url')}}" target="_blank" class="nav-link py-1 text-13 text-white"><i
                            class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a href="{{get_option('linked_in_url')}}" target="_blank"
                       class="nav-link py-1 text-13 text-white"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg header py-1">
    <div class="container custom-container">
        <!-- Brand -->
        <div>
            <a href="javascript:void(0)" class="navbar-toggler aside-toggler">
                <i class="fa fa-indent text-light-muted"></i>
            </a>
            <!-- Brand -->

            @if(get_option('logo_settings') == 'show_site_name')
                <a class="navbar-brand" href="{{route('rootPath')}}">{{get_option('site_name')}}</a>
            @elseif(get_option('logo_settings') == 'show_image')
                <a class="navbar-brand" href="{{route('rootPath')}}">
                    <img src="{{asset(get_option('logo'))}}" class="img-fluid">
                </a>
            @endif


        </div>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler animated-hamburgers collapsed" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="ml-auto">
                <ul class="navbar-nav header-nav-menu">
                    <li class="nav-item">
                        <a href="{{route('rootPath')}}"
                           class="nav-link {{request()->route()->getName() === 'rootPath' ? 'text-brand-secondary' : ''}}">@lang('default.home')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('categories')}}"
                           class="nav-link {{request()->route()->getName() === 'categories' ? 'text-brand-secondary' : ''}}">@lang('default.categories')</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('adsListing')}}"
                           class="nav-link {{request()->route()->getName() === 'adsListing' ? 'text-brand-secondary' : ''}}">Annonces</a>
                    </li>
                    @foreach($headerPages as $headerPage)
                        <li class="nav-item">
                            <a href="{{route('dynamicPage', [$headerPage->slug])}}"
                               class="nav-link {{request()->route()->getName() === 'dynamicPage' ? 'text-brand-secondary' : ''}}">{{$headerPage->title}}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a href="{{route('contactUs')}}"
                           class="nav-link {{request()->route()->getName() === 'contactUs' ? 'text-brand-secondary' : ''}}">Contact</a>
                    </li>


                @if(!Auth::user())
                    <!--================== If Not Login ===================-->
                        <li class="nav-item">
                            <a href="{{route('memberRegistration')}}" class="nav-link py-lg-1 my-2 my-lg-0">
                                <span class="btn btn-sm btn-outline-brand-primary px-3"><i
                                        class="icofont-plus text-13 mr-1"></i> Créer un compte</span>
                            </a>
                        </li>
                @endif

                <!--============  After Login =============-->
                    <li class="nav-item dropdown mr-0">
                        <a href="#" data-toggle="dropdown" class="d-flex align-items-center nav-link py-lg-1">
                            <span class="box-30 border-red rounded-circle">
                                <i class="fa fa-user-o"></i>
                            </span>
                            <span class="d-lg-none ml-2">Mon compte</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-tool">

                            @auth
                                <a href="{{route('home')}}" class="d-flex dropdown-item py-2 text-muted text-15"><span
                                        class="box-20 mr-2"><i class="fa fa-sign-in"></i></span> @lang('default.dashboard')</a>
                                <a href="{{route('logout')}}" class="d-flex dropdown-item py-2 text-muted text-15"><span
                                        class="box-20 mr-2"><i class="fa fa-user-plus"></i></span> @lang('default.logout')</a>
                            @else
                                <a href="{{route('login')}}" class="d-flex dropdown-item py-2 text-muted text-15"><span
                                        class="box-20 mr-2"><i class="fa fa-sign-in"></i></span> @lang('default.login')</a>
                                <a href="{{route('memberRegistration')}}"
                                   class="d-flex dropdown-item py-2 text-muted text-15"><span class="box-20 mr-2"><i
                                            class="fa fa-user-plus"></i></span>S'inscrire</a>
                            @endauth
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
