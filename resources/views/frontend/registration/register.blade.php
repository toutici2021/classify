@extends('frontend.web-master')
@section('content')
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">Créer un compte</li>
        </ol>
    </nav>
    <main class="main-body">


        <section class="my-4">
            <!--============== Banner ===================-->
            <div class="container custom-container">
                <div class="section-title text-center mb-5">
                    <h1 class="title-before-after">Inscription des membres</h1>
                    <p class="text-center text-strong">Inscrivez-vous pour publier votre annonce et en garder une trace dans votre compte ou
                        se connecter à d'autres vendeurs.</p>
                </div>

                <div class="w-lg-75 mx-auto border rounded overflow-hidden  my-lg-5">
                    <div class="row no-gutters">
                        <div class="col-lg-7">
                            <div class="user-registration p-xl-5">
                                @if (\Session::has('success'))
                                    <h3 class="alert alert-info"> @php echo \Session::get('success'); @endphp </h3>
                                @else
                                    <form action="{{route('storeRegistrationInfo')}}" method="post">
                                        @csrf
                                        <h5>Créer un compte</h5>
                                        <div>
                                            <div class="form-group">
                                                <input type="text" name="first_name" value="{{old('first_name')}}"
                                                       class="form-control {{$errors->has('first_name') ? 'is-invalid':''}} "
                                                       placeholder="Prénoms" aria-label="input">
                                                @if ($errors->has('first_name'))
                                                    <span
                                                        class="error"> <i>{{ $errors->first('first_name') }}</i> </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="last_name" value="{{old('last_name')}}"
                                                       class="form-control {{$errors->has('last_name') ? 'is-invalid':''}}"
                                                       placeholder="Nom" aria-label="input">
                                                @if ($errors->has('last_name'))
                                                    <span class="error"><i>{{ $errors->first('last_name') }}</i></span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="email" name="email" value="{{old('email')}}"
                                                       class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
                                                       placeholder="email" aria-label="input">
                                                @if ($errors->has('email'))
                                                    <span class="error"><i>{{ $errors->first('email') }}</i></span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="address" value="{{old('address')}}"
                                                       class="form-control {{$errors->has('address') ? 'is-invalid':''}} "
                                                       placeholder="adresse" aria-label="input">
                                                @if ($errors->has('address'))
                                                    <span class="error"><i>{{ $errors->first('address') }}</i></span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="password" value="{{old('password')}}"
                                                       class="form-control {{$errors->has('password') ? 'is-invalid':''}}"
                                                       placeholder="Mot de passe" aria-label="input">
                                                @if ($errors->has('password'))
                                                    <span class="error"><i>{{ $errors->first('password') }}</i></span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="cute-label text-14">
                                                    <input name="terms_condition" value="yes"
                                                           {{old('terms_condition' == 'yes' ? 'checked' : '')}} type="checkbox">
                                                           J'ai lu et suis d'accord avec <a target="_blank"
                                                                                href="{{route('dynamicPage','terms-and-conditions')}}"
                                                                                class="text-brand-secondary"><strong>Terms
                                                            & Conditions</strong></a>
                                                    <span class="cute-check"></span>
                                                </label>
                                                @if ($errors->has('terms_condition'))
                                                    <span
                                                        class="error"><i>{{ $errors->first('terms_condition') }}</i></span>
                                                @endif
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit"
                                                        class="btn btn-brand-primary btn-block btn-lg px-5">
                                                        S'inscrire
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="h-100 position-relative">
                                <img src="{{asset('public/frontend/images/ui-default/registration-bg.svg')}}"
                                     class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
@section('css')
    <style>
        .is-invalid {
            border: 1px solid #FF0000;
        }

        .error {
            color: #FF0000;
        }
    </style>
@endsection
@section('js')

@endsection
