@extends('frontend.web-master')
@section('content')
    <!--======== Breadcrumb ==============-->
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$user->full_name}}</li>
        </ol>
    </nav>

    <main class="main-body">
        <section class="my-4">
            <!--============== Banner ===================-->
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        @include('frontend.commom.ad-filter')

                        @if(get_option('enable_monetize') == 1 && get_option('store_detsils_page_bottom_of_left_side_bar'))
                            <div class="ads my-4">
                                {!! get_option('store_detsils_page_bottom_of_left_side_bar') !!}
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="seller-information mb-4">
                            <div class="row no-gutters mb-3">
                                <div class="col-md-2">
                                    <div class="border">
                                        <img src="{{asset($user->photo)}}" class="img-fluid p-1">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="ml-3 mt-3">
                                        <h5>{{strtoupper($user->full_name)}}</h5>
                                        @if($user->phone)
                                            <div class="d-flex">
                                                <span class="mr-2"> <i
                                                        class="fa fa-phone text-13 text-brand-secondary"></i>  </span>
                                                <span class="text-15 text-muted">{{$user->phone}}</span>
                                            </div>
                                        @endif
                                        @if($user->address)
                                            <div class="d-flex">
                                                <span class="mr-2"> <i
                                                        class="fa fa-map-marker text-13 text-brand-secondary"></i>  </span>
                                                <span class="text-15 text-muted">{{$user->address}}</span>
                                            </div>
                                        @endif
                                        @if($user->email)
                                            <div class="d-flex">
                                                <span class="mr-2"> <i
                                                        class="fa fa-envelope text-13 text-brand-secondary"></i>  </span>
                                                <span class="text-15"><a class="text-brand-secondary"
                                                                         href="mailto:{{$user->email}}">{{$user->email}}</a></span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if($user->description)
                                <div>
                                    <h5 class="border-bottom after-border-bottom">Description</h5>
                                    <p class="text-15">{{$user->description}}</p>
                                </div>
                            @endif
                        </div>

                        <div class="row small-gutters">

                            @foreach($ads as $ad)
                                <div class="col-md-6 col-xl-3 mb-3">
                                    <div class="product-item">
                                        <div class="move-dir-box">
                                            <span
                                                class="batch {{$ad->price_plan == 'regular' ? 'regular' : ''}}"> {{ucwords($ad->price_plan)}}</span>
                                            <div class="product-img-box">
                                                <a href="{{route('rootPath', [$ad->slug])}}" class="">
                                                    <img
                                                        src="{{$ad->image ? asset(ad_thumb($ad->image->media_name)) : ''}}"
                                                        class="product-img" alt="Product Image">
                                                </a>

                                                <div class="position-absolute w-100 bottom category-price-holder">
                                                        <span
                                                            class="price text-shadow d-block text-center text-white text-14"> {{ get_option('currency_sign') }} {{$ad->price}} </span>
                                                </div>

                                            </div>

                                            <!--========== Overlay Link ==========-->
                                            <a href="{{route('rootPath', [$ad->slug])}}" class=""></a>
                                        </div>
                                        <div class="product-content">
                                            @if($ad->category)
                                                <div class="mb-2">
                                                    <a href="{{route('categories', [$ad->category->category_slug])}}"
                                                       class="font-weight-medium text-brand-fourth text-14">{{$ad->category->category_name}}</a>
                                                </div>
                                        @endif
                                        <!--====== Title ======-->
                                            <a href="{{route('rootPath', [$ad->slug])}}"
                                               class="product-title text-brand-secondary"> {{\Illuminate\Support\Str::words($ad->title, 5)}} </a>
                                        </div>
                                        <div class="product-item-footer">
                                            <div>
                                                @if($ad->user)
                                                    <a href="{{route('sellerStore', [$ad->user->slug])}}"
                                                       class="d-block text-brand-tertiary text-13 my-1"><i
                                                            class="icofont-user mr-1"></i> <span
                                                            class="font-weight-medium">{{$ad->user->full_name}}</span></a>
                                                @endif
                                                <span class="d-block text-13 my-1">
                                            <i class="icofont-google-map mr-1"></i> {{$ad->city ? $ad->city->city_name.',' : ''}} {{$ad->state ? $ad->state->state_name.',' : ''}} {{$ad->country ? $ad->country->country_name : ''}}
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <nav aria-label="pagination" class="mt-5 pagination-center">
                            {{$ads->links("pagination::bootstrap-4")}}
                        </nav>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('public/frontend/js/partial/filter.js')}}"></script>
@endsection
