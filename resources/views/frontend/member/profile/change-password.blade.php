@extends('frontend.member-master')
@section('content')
    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            <!--============= Aside ============-->
                            @include('frontend.member.common.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content">

                            <div class="user-theme-block p-xl-5 min-vh-75">

                                <h3 class="mb-4 border-bottom pb-2"><i class="fa fa-lock mr-2"></i> Changer le mot de passe</h3>

                                <form action="{{route('memberSavePassword')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="old_password">Old Password</label>
                                            <input type="password" name="old_password"
                                                   class="form-control {{$errors->has('old_password') ? 'is-invalid':''}}"
                                                   id="old_password"
                                                   placeholder="Old Password" value="{{old('old_password')}}">
                                            @if ($errors->has('old_password'))
                                                <span class="error">{{ $errors->first('old_password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">New Password</label>
                                            <input type="password"
                                                   class="form-control {{$errors->has('new_password') ? 'is-invalid':''}}"
                                                   id="new_password" name="new_password" placeholder="New Password" value="{{old('new_password')}}">
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
                                                   placeholder="Confirm New Password" value="{{old('new_password_confirmation')}}">
                                            @if ($errors->has('new_password_confirmation'))
                                                <span class="error">{{ $errors->first('new_password_confirmation') }}</span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-danger float-right">Enregistrer le mot de passe</button>
                                    </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>



    </main>
@endsection
@section('css')


@endsection
@section('js')

@endsection
