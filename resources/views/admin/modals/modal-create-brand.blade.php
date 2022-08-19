<div class="modal fade" id="modal-brand" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('storeBrand')}}" method="post">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title">{{__('default.add_new_brand')}}</h4>
                    <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>{{__('default.brand_name')}}</label>
                        <input type="text" required
                               class="form-control {{$errors->has('brand_name') ? 'is-invalid':''}}"
                               name="brand_name"
                               placeholder="{{__('default.brand_name')}}">

                        @if ($errors->has('brand_name'))
                            <span class="error"> {{ $errors->first('brand_name') }}</span>
                        @endif

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('default.close')}}</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> {{__('default.save_brand')}}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


