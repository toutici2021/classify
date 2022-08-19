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
                    <h3 class="card-title">{{$title}} pour l'URL: "{{url($meta->url_name)}}"</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('update_meta', [$meta->id])}}" method="post" class="PaymentSetting">
                    @csrf
                        <div class="form-group">
                            <label for="meta_title" class="col-sm-12 control-label ml-2">
                                Méta-titre
                            </label>
                            <div class="col-sm-8">
                               <textarea class="form-control {{ $errors->has('meta_title')? 'is-invalid':'' }} " name="meta_title" id="meta_title">{{old('meta_title') ? old('meta_title') : $meta->meta_title}}</textarea>
                                @if ($errors->has('meta_title'))
                                    <span class="error">{{ $errors->first('meta_title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_description" class="col-sm-12 control-label ml-2">
                                Meta Description
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control {{ $errors->has('meta_description')? 'is-invalid':'' }}" name="meta_description" id="meta_description">{{old('meta_description') ? old('meta_description') : $meta->meta_description}}</textarea>
                                @if ($errors->has('meta_description'))
                                    <span class="error">{{ $errors->first('meta_description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords" class="col-sm-12 control-label ml-2">
                                Meta Keywords
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control {{ $errors->has('meta_keywords')? 'is-invalid':'' }}" name="meta_keywords" id="meta_keywords">{{old('meta_keywords') ? old('meta_keywords') : $meta->meta_keywords}}</textarea>
                                @if ($errors->has('meta_keywords'))
                                    <span class="error">{{ $errors->first('meta_keywords') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-danger float-right"><i class="fa fa-save"></i> Enregistrer et mettre à jour</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')


@stop
