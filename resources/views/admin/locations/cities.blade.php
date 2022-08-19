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
                    <h3 class="card-title">{{$title}}</h3>
                    <button class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-city"><i
                            class="fab fa-buffer"></i> Ajouter une nouvelle ville
                    </button>
                </div>
                <div class="card-body">
                    <table class="city-data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>City</th>
                            <th>État</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.modal-create-city')

    <div class="modal fade" id="editCity" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('updateCity')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" class="id">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">Edit City</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Choisissez un pays</label>
                            <select class="form-control select2 country-id get-states" name="country_id">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('country_id'))
                                <span class="error"> {{ $errors->first('country_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Sélectionner un état</label>
                            <select class="form-control select2 state-id" name="state_id" required>

                            </select>
                            @if ($errors->has('state_id'))
                                <span class="error"> {{ $errors->first('state_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nom de Ville</label>
                            <input type="text"
                                   class="form-control city-name {{$errors->has('city_name') ? 'is-invalid':''}}"
                                   name="city_name"
                                   placeholder="Nom de Ville" required>
                            @if ($errors->has('city_name'))
                                <span class="error"> {{ $errors->first('city_name') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Enregistrer la ville</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/cities.js')}}"></script>
@stop
