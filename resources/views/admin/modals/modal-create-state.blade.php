<div class="modal fade" id="modal-state" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('storeState')}}" method="post">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">Ajouter un nouvel état</h4>
                    <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Choisissez un pays</label>
                        <select class="form-control select2" name="country_id">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('country_name'))
                            <span class="error"> {{ $errors->first('country_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Nom d'état</label>
                        <input type="text" class="form-control {{$errors->has('state_name') ? 'is-invalid':''}}"
                               name="state_name"
                               placeholder="Nom d'état">

                        @if ($errors->has('state_name'))
                            <span class="error"> {{ $errors->first('state_name') }}</span>
                        @endif

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Enregistrer l'état</button>
                </div>
            </form>
        </div>
    </div>
</div>


