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
                    <h3 class="card-title" >{{$title}}</h3>
                </div>
                <form action="{{route('updatePassword')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="old_password">Ancien mot de passe</label>
                            <input type="password" name="old_password"
                                   class="form-control {{$errors->has('old_password') ? 'is-invalid':''}}"
                                   id="old_password"
                                   placeholder="Ancien mot de passe">
                            @if ($errors->has('old_password'))
                                <span class="error">{{ $errors->first('old_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="new_password"> nouveau mot de passe</label>
                            <input type="password"
                                   class="form-control {{$errors->has('new_password') ? 'is-invalid':''}}"
                                   id="new_password" name="new_password" placeholder=" nouveau mot de passe">
                            @if ($errors->has('new_password'))
                                <span class="error">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation">Confirmer le nouveau mot de passe</label>
                            <input type="password"
                                   class="form-control {{$errors->has('new_password_confirmation') ? 'is-invalid':''}}"
                                   name="new_password_confirmation"
                                   id="new_password_confirmation"
                                   placeholder="Confirmer le nouveau mot de passe">
                            @if ($errors->has('new_password_confirmation'))
                                <span class="error">{{ $errors->first('new_password_confirmation') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-danger float-right">Mettre à jour le mot de passe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
@stop
