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
                    <h3 class="card-title">{{__('default.brands')}}</h3>
                    <button class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-brand"><i
                            class="fab fa-adobe"></i>{{__('default.add_new_brands')}}
                    </button>
                </div>
                <div class="card-body">
                    <table class="brand-data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>{{__('default.brand_name')}}</th>
                            <th>{{__('default.total_products')}}</th>
                            <th>{{__('default.actions')}}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.modal-create-brand')

    <div class="modal fade" id="editBrand" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('updateBrand')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" class="id">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">{{__('default.edit_brand')}}</h4>
                        <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('default.brand_name')}}</label>
                            <input type="text"
                                   class="form-control brand-name {{$errors->has('brand_name') ? 'is-invalid':''}}"
                                   name="brand_name"
                                   placeholder="Brand Name">

                            @if ($errors->has('brand_name'))
                                <span class="error"> {{ $errors->first('brand_name') }}</span>
                            @endif

                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger"
                                data-dismiss="modal">{{__('default.close')}}</button>
                        <button type="submit" class="btn btn-danger"><i
                                class="fa fa-save"></i> {{__('default.save_brand')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/brand.js')}}"></script>
@stop
