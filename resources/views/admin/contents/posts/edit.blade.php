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
                    <form action="{{route('updatePage', [$post->id])}}" id="submit_test_email" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Title</label>
                            <input id="test-email-to" type="text" name="title" value="{{$post->title}}"
                                   class="form-control"
                                   placeholder="{{__('default.page_title')}}">
                            <div id="error_title"></div>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control post_content" name="post_content" id=""
                                      rows="10">{{$post->post_content}}</textarea>
                            <div id="error_post_content"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="show_in_header_menu" class="checkbox-inline">
                                    <input type="checkbox" value="1" id="show_in_header_menu"
                                           name="show_in_header_menu" {{$post->show_in_header_menu == 1 ? 'checked' : '' }} >
                                    {{__('default.show_in_header_menu')}}
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="show_in_footer_menu" class="checkbox-inline">
                                    <input type="checkbox" value="1"
                                           {{$post->show_in_footer_menu == 1 ? 'checked' : '' }} id="show_in_footer_menu"
                                           name="show_in_footer_menu">
                                    {{__('default.show_in_footer_menu')}}
                                </label>
                            </div>
                        </div>
                        <a href="{{route('pages')}}" class="btn btn-danger">{{__('default.cancel')}}
                        </a>
                        <button type="submit" id="" class="btn btn-danger float-right">
                            <i class="fa fa-save"></i> {{__('default.save')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')

@stop
