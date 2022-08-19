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
                    <a class="btn btn-danger float-right" href="{{route('createSlider')}}"><i
                            class="fab fa-buffer"></i> Créer un nouveau slide
                    </a>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="15%">Image</th>
                            <th width="20%">Caption</th>
                            <th>Description</th>
                            <th width="12%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img src="{{asset($slider->media_name)}}" class="img-fluid"></td>
                                <td> {{$slider->caption}} </td>
                                <td>{{$slider->description}}</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="Edit this slider"
                                       href="{{route('editSlider', [$slider->id])}}" class="btn btn-danger btn-sm edit"><i
                                            class="fas fa-pen"></i> </a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm delete-slider"
                                       data-id="{{ $slider->id }}" data-name="{{ $slider->caption }}"><i
                                            class="fa fa-trash"></i> </a>
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
    <script src="{{asset('assets/dist/js/partial/slider.js')}}"></script>
@endsection


