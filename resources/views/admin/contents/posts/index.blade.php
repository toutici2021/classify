@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('asset/plugins/summernote/summernote-bs4.css')}}">
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
                    <h3 class="card-title">Pages</h3>
                    <a class="btn btn-danger float-right" href="{{route('createPage')}}"><i
                            class="fab fa-buffer"></i> Créer une nouvelle page
                    </a>
                </div>
                <div class="card-body">
                    <table class="brand-data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>{{__('default.page_title')}}</th>
                            <th>{{__('default.page_created_at')}}</th>
                            <th>{{__('default.actions')}}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modals.modal-create-new-post')
@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/page.js')}}"></script>
@stop
