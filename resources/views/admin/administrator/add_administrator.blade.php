@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12 mb-1">

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title title-adjustment">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('postAdministrator')}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name"
                                           class="form-control {{$errors->has('first_name') ? 'is-invalid':''}}"
                                           value="{{ old('first_name') }}" placeholder="Prénoms" tabindex="1">
                                    @if ($errors->has('first_name'))
                                        <span class="error">{{ $errors->first('first_name') }}</span><br>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name"
                                           class="form-control {{$errors->has('last_name') ? 'is-invalid':''}}"
                                           value="{{ old('last_name') }}" placeholder="Nom" tabindex="2">
                                    @if ($errors->has('last_name'))
                                        <span class="error">{{ $errors->first('last_name') }}</span><br>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email"
                                   class="form-control {{$errors->has('email') ? 'is-invalid':''}}"
                                   value="{{ old('email') }}"
                                   placeholder="Email " tabindex="4">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span><br>
                            @endif


                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" id="phone"
                                   class="form-control {{$errors->has('phone') ? 'is-invalid':''}}"
                                   value="{{ old('phone') }}"
                                   placeholder="téléphone" tabindex="3">
                            @if ($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span><br>
                            @endif
                        </div>


                        <div class="form-group">
                            <select id="gender" name="gender"
                                    class="form-control select2 {{$errors->has('gender') ? 'is-invalid':''}}"
                                    style="width: 100% !important;">
                                <option value="">Genre</option>
                                <option value="male">Homme</option>
                                <option value="female">Femme</option>
                                <option value="third_gender">Autres</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="error">{{ $errors->first('gender') }}</span><br>
                            @endif
                        </div>


                        <div class="form-group">
                            <select id="country" name="country" style="width: 100% !important;"
                                    class="form-control select2 {{$errors->has('country') ? 'is-invalid':''}}">
                                <option value="">Selectionner un pays</option>
                                @foreach($countries as $country)
                                    <option
                                        value="{{ $country->id }}" {{ old('country') == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('country'))
                                <span class="error">{{ $errors->first('country') }}</span><br>
                            @endif

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password"
                                           class="form-control {{$errors->has('password') ? 'is-invalid':''}}"
                                           placeholder="Mot de passe" tabindex="5">
                                    @if ($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span><br>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control {{$errors->has('password_confirmation') ? 'is-invalid':''}}"
                                           placeholder="Confirmer mot de passe" tabindex="6">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="error">{{ $errors->first('password_confirmation') }}</span><br>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 float-right">
                            <button type="submit" class="btn btn-danger float-right"><i class="fa fa-save"></i> Ajouter
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
@stop
