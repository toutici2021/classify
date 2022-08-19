@extends('frontend.web-master')
@section('content')
    <div class="main-body">
        <!--============== Banner ===================-->
        @if($sliders->count() > 0 && get_option('enable_slider') == 1)
            <section class="home-banner embed-responsive embed-responsive-3by1">
                <div class="embed-responsive-item">
                    <!--=========== Banner Carousel ============-->

                    <div id="homeBannerCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($sliders as $key => $slider)
                                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                    <div class="embed-responsive embed-responsive-3by1">
                                        <img src="{{asset($slider->media_name)}}" class="embed-responsive-img">
                                        <!-- Ratio: 21:9, Size: 1920 : 822.857 -->
                                        <div class="overlay banner-embed-overlay">
                                            <div class="center w-100 banner-content-height">
                                                <div class="container carousel-content-item">
                                                    <h1 class="text-center text-white font-weight-strong mb-4 mb-md-0">{{$slider->caption}} </h1>
                                                    <p class="text-center text-white mb-4 d-md-down-none">{{$slider->description}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!--======== Banner Overlay Content ========-->
                    <div class="banner-overlay">
                        <div class="container h-100 position-relative">
                            <div class="banner-overlay-content">
                                <div class="overlay-form">
                                    <form method="GET" action="{{route('adsListingSearch')}}">
                                        <div class="base-search-form-group d-flex ">
                                            <div class="d-flex flex-grow-1">
                                                <!--==== Search Key =======-->
                                                <div class="flex-grow-1">
                                                    <input type="text" name="key" value="{{request('key')}}"
                                                           class="form-control" placeholder="Search ..."
                                                           aria-label="key">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-grow-1 px-2">
                                                <!--==== Search Key =======-->
                                                <div class="flex-grow-1">
                                                    <select name="category" class="form-control" aria-label="category">
                                                        <option value="all">Toutes les catégories</option>
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category->id}}" {{request('category') == $category->id ? 'selected' : ''}} >{{$category->category_name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-brand-primary"><i
                                                        class="fa fa-search"></i> <span
                                                        class="d-md-down-none ml-2">@lang('default.search')</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    <!--============== Category ===============-->
        <section class="bg-theme-light py-4 py-lg-5 mb-5">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h1 class="title-before-after">@lang('default.categories')</h1>
                </div>
                <div class="row small-gutters">
                    @foreach($categories as $category)
                        @if($category->publishedAds->count() > 0)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                                <div class="embed-responsive embed-responsive-1by1 category-item">
                                    <a href="{{route('categories', [$category->category_slug])}}"
                                       class="d-block embed-responsive-item bg-white rounded">
                        <span class="d-block center w-100 p-3">
                            <span class="box-70 mx-auto mb-2">
                                <i class="fa {{$category->fa_icon}} fa-3x category-icon"></i>
                            </span>
                            <span class="d-block text-center category-title">{{$category->category_name}}</span>
                        </span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>



        <!--============== Premium Add ==================-->
        <section class="mb-5">
            <div class="container custom-container">
                <div class="section-title text-center mb-5">
                    <h1 class="title-before-after">Annonces Premium</h1>
                </div>
                <div class="row small-gutters">
                    @foreach($premium_ads as $premium_ad)
                        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                            <div class="product-item">
                                <div class="move-dir-box">
                                    <span class="batch">{{ucwords($premium_ad->price_plan)}}</span>
                                    <span
                                        class="badge badge-warning ml-1">{{ucwords($premium_ad->mark_ad_urgent ? 'Urgent':'')}}</span>
                                    <div class="product-img-box">
                                        <a href="{{route('rootPath', [$premium_ad->slug])}}">
                                            <img
                                                src=" {{$premium_ad->image ? asset(ad_thumb($premium_ad->image->media_name)) : ''}}"
                                                class="product-img" alt="Product Image">
                                        </a>

                                        <div class="position-absolute w-100 bottom price-holder">
                                                <span
                                                    class="price  d-block text-center text-white text-14"> {{ get_option('currency_sign') }} {{$premium_ad->price}} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    @if($premium_ad->category)
                                        <div class="mb-2">
                                            <a href="{{route('categories', [$premium_ad->category->category_slug])}}"
                                               class="font-weight-medium text-brand-fourth text-14">{{$premium_ad->category->category_name}}</a>
                                        </div>
                                @endif
                                <!--====== Title ======-->
                                    <a href="{{route('rootPath', [$premium_ad->slug])}}"
                                       class="product-title text-brand-secondary">{{\Illuminate\Support\Str::words($premium_ad->title, 8)}}</a>
                                </div>
                                <div class="product-item-footer">
                                    <div>
                                        @if($premium_ad->user)
                                            <a href="{{route('sellerStore', [$premium_ad->user->slug])}}"
                                               class="d-block text-brand-tertiary text-13 my-1"><i
                                                    class="icofont-user mr-1"></i> <span
                                                    class="font-weight-medium">{{$premium_ad->user->full_name}}</span></a>
                                        @endif
                                        <span class="d-block text-13 my-1">
                                    <i class="icofont-google-map mr-1"></i> {{$premium_ad->city ? $premium_ad->city->city_name.',' : ''}} {{$premium_ad->state ? $premium_ad->state->state_name.',' : ''}} {{$premium_ad->country ? $premium_ad->country->country_name : ''}}
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{route('adsListingPremium')}}" class="btn btn-brand-secondary">Voir toutes les annonces Premium <i
                            class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </section>

        @if(get_option('enable_monetize') == 1 && get_option('home_page_below_premium_ads_section'))

            <section class="bg-theme-light py-4 py-lg-5 mb-5">
                <div class="container custom-container">
                    <div class="row small-gutters">
                        <div class="col-md-12 my-2 my-md-0">
                            {!! get_option('home_page_below_premium_ads_section') !!}
                        </div>
                    </div>
                </div>
            </section>
        @endif

    <!--============== Regular Add ==================-->
        <section class="mb-5">
            <div class="container custom-container">
                <div class="section-title text-center mb-5">
                    <h1 class="title-before-after">Annonces gratuites</h1>
                </div>
                

                <div class="row small-gutters">
                    @foreach($recent_ads as $recent_ad)
                        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                            <div class="product-item">
                                <div class="move-dir-box">
                                    <span class="batch regular">{{ucwords($recent_ad->price_plan)}}</span>
                                    <div class="product-img-box">
                                        <a href="{{route('rootPath', [$recent_ad->slug])}}">
                                            <img
                                                src="{{$recent_ad->image ? asset(ad_thumb($recent_ad->image->media_name)) : ''}}"
                                                class="product-img" alt="Product Image">
                                        </a>
                                        <div class="position-absolute w-100 bottom price-holder">
                                            <span
                                                class="price d-block text-center text-white text-14"> {{ get_option('currency_sign') }} {{$recent_ad->price}} </span>
                                        </div>
                                    </div>

                                    <!--========== Overlay Link ==========-->
                                    <a href="{{route('rootPath', [$recent_ad->slug])}}"></a>
                                </div>
                                <div class="product-content">
                                    @if($recent_ad->category)
                                        <div class="mb-2">
                                            <a href="{{route('categories', [$recent_ad->category->category_slug])}}"
                                               class="font-weight-medium text-brand-fourth text-14">{{$recent_ad->category->category_name}}</a>
                                        </div>
                                @endif
                                <!--====== Title ======-->
                                    <a href="{{route('rootPath', [$recent_ad->slug])}}"
                                       class="product-title text-brand-secondary">{{\Illuminate\Support\Str::words($recent_ad->title, 8)}}</a>
                                </div>
                                <div class="product-item-footer">
                                    <div>
                                        @if($recent_ad->user)
                                            <a href="{{route('sellerStore', [$recent_ad->user->slug])}}"
                                               class="d-block text-brand-tertiary text-13 my-1"><i
                                                    class="icofont-user mr-1"></i> <span
                                                    class="font-weight-medium">{{$recent_ad->user->full_name}}</span></a>
                                        @endif
                                        <span class="d-block text-13 my-1">
                                        <i class="icofont-google-map mr-1"></i> {{$recent_ad->city ? $recent_ad->city->city_name.',' : ''}} {{$recent_ad->state ? $recent_ad->state->state_name.',' : ''}} {{$recent_ad->country ? $recent_ad->country->country_name : ''}}
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-3">
                    <a href="{{route('adsListingRegular')}}" class="btn btn-brand-secondary">Voir toutes les annonces gratuites <i
                            class="fa fa-long-arrow-right"></i></a>
                </div>

            </div>
        </section>

        @if(get_option('enable_monetize') == 1 && get_option('home_page_below_regular_ads_section'))
            <section class="bg-theme-light py-2 py-lg-5 mb-5">
                <div class="container custom-container">
                    <div class="row small-gutters">
                        <div class="col-md-12 my-2 my-md-0">
                            {!! get_option('home_page_below_regular_ads_section')  !!}
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </div>
@endsection
