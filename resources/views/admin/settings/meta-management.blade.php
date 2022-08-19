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
                <div class="card-body" >
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="40%">URL / Action</th>
                            <th>Meta Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($metas as $meta)
                            <tr>
                                <td>
                                    <div class="mb-2" style="color: #6610f2"> {{url($meta->url_name)}}  </div>
                                    <div><a href="{{route('edit_meta', [$meta->id])}}" class="btn btn-danger btn-sm"><i
                                                class="fas fa-edit"></i> Edit Meta </a></div>
                                </td>
                                <td>
                                    <div class="mb-1"><span
                                            class="text-bold mr-2">Meta Title: </span> {{$meta->meta_title}}</div>
                                    <div class="mb-1"><span
                                            class="text-bold mr-2">Meta Description: </span> {{$meta->meta_description}}
                                    </div>
                                    <div class="mb-1"><span
                                            class="text-bold mr-2">Meta Keywords: </span> {{$meta->meta_keywords}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')


@stop
