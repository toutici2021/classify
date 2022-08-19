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
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-body">
                    <form action="{{ route('updateSlider', [$slider->id]) }}" method="POST" enctype="multipart/form-data"
                          name="add_slider">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Caption</strong>
                                    <input type="text" name="caption" value="{{$slider->caption}}" id="caption" class="form-control" placeholder="Entrer Caption">
                                    <span class="text-danger"> {{ $errors->first('caption') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Description</strong>
                                    <textarea name="description" id="description" placeholder="Description" class="form-control">{{$slider->description}}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <img src="{{asset($slider->media_name)}}" class="img-fluid">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Image de la bannière:</strong>
                                    <input type="file" name="media_name" class="form-control" accept="image/.jpg,.jpeg,.png,.JPG,.JPEG,.PNG">
                                    <span class="text-danger">{{ $errors->first('media_name') }}</span>
                                    <p class="text-danger custom-font-bold mt-1">Utiliser 1920×960 image des dimensions pour la bannière de la meilleure suite</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-image"></i> Mettre à jour le slide </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop



