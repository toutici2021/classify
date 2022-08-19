<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{get_option('site_name')}} | Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--============== Bootstrap plugin Must Include ============-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <!--========== Google Font For Site Font ===============-->
    <!--================= Font Icon For Set icon in page Must Include ===================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/icon/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/icon/icofont/icofont.css')}}">

    <!--============ Plugin ================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.directional-hover.min.css')}}">

    <!--============ Custom Css ==================-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom-default.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
</head>
<body class="login-body">

<!--========== Background ============-->
<div class="body-fixed-attachment">
    <div class="login-background"></div>
</div>

<div class="content-vertical-center center-mw-1200">
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 mx-md-auto mx-lg-0 position-relative">
                <div class="user-card bg-white rounded shadow">
                    <div class="user-card-body user-form-alt p-4 p-xl-5">
                        <div class="mb-4">
                            <a href="{{route('rootPath')}}" class="navbar-brand"><img
                                    src="{{asset(get_option('logo'))}}" class="img-fluid"></a>
                        </div>

                        <div class="mb-4">
                            <h3>{{__('default.login')}}</h3>
                        </div>

                        <div class="mb-4">
                            @if(session('message'))
                                <div class="alert alert-danger">{{session('message')}}</div>
                            @endif

                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group user-form-group-alt">
                                    <label class="user-form-label-alt" for="email">Email </label>
                                    <input name="email"  id="email" required type="email"
                                           class="user-form-input-alt" placeholder="{{__('default.email_address')}}" autocomplete="off" aria-label="input">
                                    @error('email')
                                    <p class="text-danger" role="alert">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group user-form-group-alt">
                                    <label class="user-form-label-alt" for="password">{{__('default.password')}}</label>
                                    <input type="password" name="password" id="password"
                                           class="user-form-input-alt" placeholder="{{__('default.password')}}" autocomplete="off" aria-label="input">
                                    @error('password')
                                    <p class="text-danger" role="alert">
                                        {{$message}}
                                    </p>
                                    @enderror
                                </div>

                                <div class="form-group d-flex flex-wrap justify-content-between mb-4">
                                    <div>
                                        <label class="cute-label text-14">
                                            <input type="checkbox"> {{__('default.remember_me')}}
                                            <span class="cute-check"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <a href="{{route('forget_password')}}" class="text-brand-primary text-14">{{__('default.forgot_password')}}</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-brand-primary py-2 px-4"><i
                                            class="fa fa-sign-in mr-1"></i> {{__('default.sign_in')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<!--===================== Script Must include =========================-->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<!--============== Plugin ======================-->
<!--====== Custom Js / Must Include =============-->
<script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/partial/login-background.js')}}"></script>
</body>
</html>
