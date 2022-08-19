<div class="modal fade" id="modal-city" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('storeCity')}}" method="post">
                @csrf
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">Ajouter une nouvelle ville</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Choisissez un pays</label>
                        <select class="form-control select2 country-id" name="country_id">
                            <option value="">Choisissez un pays</option>
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
                            <option value="">Sélectionner un état</option>
                        </select>
                        @if ($errors->has('state_id'))
                            <span class="error"> {{ $errors->first('state_id') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Nom de Ville</label>
                        <input type="text" class="form-control {{$errors->has('city_name') ? 'is-invalid':''}}"
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


