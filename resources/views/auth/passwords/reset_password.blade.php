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
                        <h3>Réinitialiser le mot de passe</h3>
                    </div>

                    <form method="POST" action="{{route('reset_password')}}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group user-form-group-alt">
                            <label class="user-form-label-alt" for="email">Email </label>
                            <input name="email" value="{{ $email ?? old('email') }}" id="email" required type="email"
                                   class="user-form-input-alt @error('email') is-invalid @enderror" placeholder="Email " autocomplete="email" autofocus aria-label="input">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group user-form-group-alt">
                            <label class="user-form-label-alt" for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="user-form-input-alt" placeholder="Mot de passe" aria-label="input">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group user-form-group-alt">
                            <label class="user-form-label-alt" for="password">Mot de passe</label>
                            <input id="password-confirm" type="password" class="user-form-input-alt" name="password_confirmation" class="user-form-input-alt" placeholder="Mot de passe" aria-label="input">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-brand-secondary">
                                Réinitialiser le mot de passe
                            </button>
                        </div>

                    </form>


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
