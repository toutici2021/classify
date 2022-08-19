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
                    <form action="{{route('save_settings')}}" class="form-horizontal" enctype="multipart/form-data"
                          method="post">
                        @csrf

                        <div class="form-group">
                            <div class="col-sm-8">
                                <fieldset>
                                    <label><input type="radio" value="all_countries"
                                                  name="countries_usage" {{ get_option('countries_usage') == 'all_countries'? 'checked':'' }}>
                                                  Annonces dans tous les pays</label> <br/>
                                    <label><input type="radio" value="single_country"
                                                  name="countries_usage" {{ get_option('countries_usage') == 'single_country'? 'checked':'' }}>
                                                  Uniquement pour le pays sélectionné </label> <br/>
                                </fieldset>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="usage_single_country_id" class="col-sm-4 control-label">
                                Choisissez un pays
                            </label>
                            <div class="col-sm-12">
                                <select class="form-control select2" name="usage_single_country_id"
                                        id="usage_single_country_id">
                                    @php $saved_single_country_id = get_option('usage_single_country_id'); @endphp
                                    @foreach($countries as $country)
                                        <option
                                            value="{{ $country->id }}" {{ $saved_single_country_id == $country->id? 'selected':'' }}>{{ $country->country_name }}</option>
                                    @endforeach
                                </select>

                                <span class="text-danger custom-font-bold">Les utilisateurs seront limités à créer des annonces pour le pays sélectionné et les annonces seront affichées pour ce pays spécifique uniquement sur le front-end</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-12">
                                <button type="submit" id="settings_save_btn" class="btn btn-danger float-right">
                                    <i class="fa fa-save"></i> Enregistrer les paramètres
                                </button>
                            </div>
                        </div>
                        <br><br>
                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>Nom du pays</th>
                                    <th>Code postal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($countries as $country)
                                    <tr>
                                        <td>{{$country->country_name}}</td>
                                        <td>{{$country->country_code}}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/country.js')}}"></script>
@stop
