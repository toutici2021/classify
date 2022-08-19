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
                    <form action="{{ route('storeSlider') }}" method="POST" enctype="multipart/form-data"
                          name="add_slider">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Caption</strong>
                                    <input type="text" name="caption" value="{{old('caption')}}" id="caption" class="form-control" placeholder="Entrer Caption">
                                    <span class="text-danger"> {{ $errors->first('caption') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Description</strong>
                                    <textarea name="description" id="description" placeholder="Description" class="form-control">{{old('description')}}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Banner Image:</strong>
                                    <input type="file" name="media_name" class="form-control" accept="image/.jpg,.jpeg,.png,.JPG,.JPEG,.PNG">
                                    <span class="text-danger">{{ $errors->first('media_name') }}</span>
                                    <p class="text-danger custom-font-bold mt-1">Utilisez une image aux dimensions 1920 × 960 pour
                                        bannière pour la meilleure suite</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-image"></i> Ajouter slide </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop



