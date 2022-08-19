@extends('frontend.web-master')
@section('content')
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    <main class="main-body">
        <section class="my-4 my-lg-5">
            <!--============== Banner ===================-->
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h1 class="title-before-after">Toutes les catégories</h1>
                    <p class="text-center text-strong"></p>
                </div>
                <div class="row">
                        @foreach($categories as $category)
                            @if($category->publishedAds->count() > 0)
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="embed-responsive embed-responsive-1by1 category-item">
                                        <a href="{{route('categories', [$category->category_slug])}}"
                                           class="d-block embed-responsive-item overflow-hidden rounded">
                                            @if($category->media_name)
                                                <img alt="{{$category->category_name}}"
                                                     src="{{asset($category->media_name)}}"
                                                     class="img-fit category-img">
                                            @endif
                                            <span class="category-overlay-layer">
                                <span class="d-block center w-100 p-3">
                                    <span class="box-70 mx-auto mb-2">
                                        <i class="fa {{$category->fa_icon}} fa-3x category-icon"></i>
                                    </span>
                                    <span class="d-block text-center category-title">{{$category->category_name}}</span>
                                    <span
                                        class="d-block text-center category-title">{{$category->publishedAds->count()}}</span>
                                </span>
                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                </div>

            </div>
        </section>

        @if(get_option('enable_monetize') == 1 && get_option('category_page_below_list_section'))
            <section class="bg-theme-light py-3 py-lg-3 mb-3">
                <div class="container custom-container">
                    <div class="row small-gutters">
                        <div class="col-md-12 my-2 my-md-0">
                            {!! get_option('home_page_below_premium_ads_section') !!}
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </main>
@endsection
