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
                    <form action="{{route('save_settings')}}" class="form-horizontal" enctype="multipart/form-data"
                          method="post"> @csrf
                        <div class="form-group">
                            <label for="facebook_url" class="col-sm-4 control-label">@lang('FaceBook URL') </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="facebook_url"
                                           value="{{ get_option('facebook_url') }}" name="facebook_url"
                                           placeholder="@lang('FaceBook URL')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="twitter_url" class="col-sm-4 control-label">@lang('Twitter URL') </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="twitter_url"
                                           value="{{ get_option('twitter_url') }}" name="twitter_url"
                                           placeholder="@lang('Twitter URL')">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="linked_in_url" class="col-sm-4 control-label">@lang('LinkedIn URL') </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=" fab fa-linkedin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="linked_in_url"
                                           value="{{ get_option('linked_in_url') }}" name="linked_in_url"
                                           placeholder="@lang('LinkedIn URL')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dribble_url" class="col-sm-4 control-label">@lang('Dribble URL') </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=" fab fa-dribbble"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="dribble_url"
                                           value="{{ get_option('dribble_url') }}" name="dribble_url"
                                           placeholder="@lang('Dribble URL')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="youtube_url" class="col-sm-4 control-label">Youtube URL </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="youtube_url"
                                           value="{{ get_option('youtube_url') }}" name="youtube_url"
                                           placeholder="Youtube URL">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" id="settings_save_btn" class="btn btn-danger float-right"><i
                                        class="fa fa-save"></i> Save Settings
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
    <script src="{{asset('assets/dist/js/partial/social-setting.js')}}"></script>
@stop
