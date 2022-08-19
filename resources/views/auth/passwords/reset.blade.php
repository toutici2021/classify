<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} | Réinitialiser le mot de passe</title>
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
            <div class="col-md-8 col-lg-7 col-xl-6 mx-md-auto mx-lg-0">
                <div class="user-card bg-white rounded shadow">
                    <div class="user-card-body user-form-alt p-4 p-xl-5">
                        <div class="mb-4">
                            <a href="{{route('rootPath')}}" class="navbar-brand"><img
                                    src="{{asset(get_option('logo'))}}" class="img-fluid"></a>
                        </div>
                        <div class="mb-4">
                            @if(session('message'))
                                <div class="alert alert-danger">{{session('message')}}</div>
                            @endif

                            <form method="POST" action="{{route('forget_password')}}">
                                @csrf
                                <div class="text-center mb-4">
                                    <h1 class="h3 mb-0">{{__('default.recover_your_account')}}</h1>
                                    <p>{{__('default.recover_instruction_text')}}.</p>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif


                                <div class="form-group user-form-group-alt">
                                    <label class="user-form-label-alt" for="email">Email </label>
                                    <input name="email" value="{{ old('email') }}" id="email" required type="email"
                                           class="user-form-input-alt @error('email') is-invalid @enderror"
                                           placeholder="{{__('default.email_address')}}" autocomplete="email" autofocus
                                           aria-label="input">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit"
                                            class="btn btn-brand-secondary login-btn btn-block">{{__('default.recover_your_account')}}
                                    </button>
                                </div>

                                <div class="text-center mb-3">
                                    <p class="text-muted">Avez-vous un compte? <a href="{{route('login')}}"
                                                                              style="color: #FA485D;">{{__('default.sign_in')}}</a>
                                    </p>
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
