@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('updateProfile')}}" class="form-horizontal" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Nom d'utilisateur</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('name')? 'is-invalid':'' }}"
                                       id="name"
                                       value="{{ old('name')? old('name') : $user->name }}" name="name"
                                       placeholder="Nom">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Prénoms</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control {{ $errors->has('first_name')? 'is-invalid':'' }}"
                                       id="name"
                                       value="{{ old('name')? old('name') : $user->first_name }}" name="first_name"
                                       placeholder="Prénoms">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Nom</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('last_name')? 'is-invalid':'' }}"
                                       id="name"
                                       value="{{ old('name')? old('name') : $user->last_name }}" name="last_name"
                                       placeholder="Noms">

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control {{ $errors->has('email')? 'is-invalid':'' }}"
                                       id="email"
                                       value="{{ old('email')? old('email') : $user->email }}" name="email"
                                       placeholder="Email">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-4 control-label">Genre</label>
                            <div class="col-sm-8">
                                <select id="gender" name="gender"
                                        class="form-control select2 {{ $errors->has('gender')? 'is-invalid':'' }}">
                                    <option value="">Selectionner Genre</option>
                                    <option value="male" {{ $user->gender == 'male'?'selected':'' }}>Male</option>
                                    <option value="female" {{ $user->gender == 'female'?'selected':'' }}>Fe-Male
                                    </option>
                                    <option value="third_gender" {{ $user->gender == 'third_gender'?'selected':'' }}>
                                        Autres genres
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="col-sm-4 control-label">Mobile</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('mobile')? 'is-invalid':'' }}"
                                       id="mobile"
                                       value="{{ old('mobile')? old('mobile') : $user->mobile }}" name="mobile"
                                       placeholder="Mobile">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-sm-4 control-label">Téléphone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('phone')? 'is-invalid':'' }}"
                                       id="phone"
                                       value="{{ old('phone')? old('phone') : $user->phone }}" name="phone"
                                       placeholder="Téléphone">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="phone" class="col-sm-4 control-label">@lang('default.country')</label>
                            <div class="col-sm-8">
                                <select id="country_id" name="country_id"
                                        class="form-control select2 {{ $errors->has('country_id')? 'is-invalid':'' }}">
                                    <option value="">Selectionner un pays</option>
                                    @foreach($countries as $country)
                                        <option
                                            value="{{ $country->id }}" {{ $user->country_id == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="address" class="col-sm-4 control-label">Adresse</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('address')? 'is-invalid':'' }}"
                                       id="address"
                                       value="{{ old('address')? old('address') : $user->address }}" name="address"
                                       placeholder="Adresse">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website" class="col-sm-4 control-label">Site web</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control {{ $errors->has('website')? 'is-invalid':'' }}"
                                       id="website"
                                       value="{{ old('website')? old('website') : $user->website }}" name="website"
                                       placeholder="Site web">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-sm btn-danger float-right"><i
                                        class="fa fa-user-edit"></i> Mettre à jour le profil
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')


@stop
