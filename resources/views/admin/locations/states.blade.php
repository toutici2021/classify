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
                    <button class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-state"><i
                            class="fab fa-buffer"></i> Ajouter un nouvel état
                    </button>
                </div>
                <div class="card-body">
                    <table class="state-data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nom d'état</th>
                            <th>Pays</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.modal-create-state')

    <div class="modal fade" id="editState" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('updateState')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" class="id">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">Modifier l'état</h4>
                        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Choisissez un pays</label>
                            <select class="form-control country-id select2" name="country_id">
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('country_id'))
                                <span class="error"> {{ $errors->first('country_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nom d'état</label>
                            <input type="text"
                                   class="form-control state-name {{$errors->has('state_name') ? 'is-invalid':''}}"
                                   name="state_name"
                                   placeholder="Nom d'état">

                            @if ($errors->has('state_name'))
                                <span class="error"> {{ $errors->first('state_name') }}</span>
                            @endif

                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Fermé</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Sauvegarder l'état</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/states.js')}}"></script>
@stop
