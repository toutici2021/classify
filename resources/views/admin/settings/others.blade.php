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
                <div class="card-body">
                    <form action="{{route('saveOtherSettings')}}" class="form-horizontal" enctype="multipart/form-data"
                          method="post"> @csrf

                        <div class="form-group  {{ $errors->has('logo')? 'has-error':'' }}">
                            <label class="col-sm-4 control-label">Site Logo</label>
                            <div class="col-sm-8">
                                <img  class="img-fluid" src="{{asset(get_option('logo'))}}"/>
                                <br>
                                <br>
                                <input type="file" id="logo" name="logo" class="filestyle">

                            </div>
                        </div>


                        <hr/>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-image"></i> Télécharger Logo
                                </button>
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
