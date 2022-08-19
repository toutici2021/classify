@extends('frontend.web-master')
@section('content')
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    <main class="main-body">
        <section class="py-4 pb-lg-5">
            <!--============== Banner ===================-->
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        {{strip_tags($post->post_content)}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
