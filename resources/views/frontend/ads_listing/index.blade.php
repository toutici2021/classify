@extends('frontend.web-master')
@section('content')
    <!--======== Breadcrumb ==============-->
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>

    <main class="main-body">
        <section class="my-4">
            <!--============== Banner ===================-->
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <aside class="panel-aside">
                            <div class="aside-content">
                                <div class="aside-filter rounded post-form">
                                    <div id="filter">
                                        <form method="get" action="{{route('adsListing')}}">
                                            <div class="filter-item">
                                                <p class="filter-block-title">Mot clé</p>
                                                <div class="form-group">
                                                    <input type="text" name="key" value="{{request('key')}}"
                                                           placeholder="Search Keyword" class="form-control">
                                                </div>
                                            </div>

                                            <div class="filter-item">
                                                <p class="filter-block-title">Catégories</p>
                                                <div class="form-group">
                                                    <select name="category" id="category_id" class="form-control"
                                                            aria-label="select">
                                                        <option value="all">Toutes les Catégories</option>
                                                        @foreach($categories as $filterCategory)
                                                            <option
                                                                value="{{$filterCategory->id}}" {{request('category') == $filterCategory->id ? 'selected' : ''}} >{{$filterCategory->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="subcategory" id="subcategory_id" class="form-control"
                                                            aria-label="select">
                                                        <option value="all">Toutes les sous-catégories</option>
                                                        @foreach($filterSubcategories as $filterSubcategory)
                                                            <option
                                                                value="{{$filterSubcategory->id}}" {{request('subcategory') == $filterSubcategory->id ? 'selected' : ''}} >{{$filterSubcategory->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="filter-item">
                                                <p class="filter-block-title">Marque</p>
                                                <div class="form-group">
                                                    <select name="brand" id="brand_id" class="form-control"
                                                            aria-label="select">
                                                        <option value="all">Toutes les marques</option>
                                                        @foreach($brands as $filterBrand)
                                                            <option
                                                                value="{{$filterBrand->id}}" {{request('brand') == $filterBrand->id ? 'selected' : ''}} >{{$filterBrand->brand_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="filter-item">
                                                <p class="filter-block-title">Pays</p>
                                                <div class="form-group">
                                                    <select name="country" id="country_id" class="form-control" aria-label="select">

                                                        @if(get_option('countries_usage') == 'single_country')
                                                            <option value="{{single_country_for_ad_filter()->id}}">{{single_country_for_ad_filter()->country_name}}</option>
                                                        @else
                                                            <option value="all">Tous les pays</option>
                                                            @foreach($countries as $filterCountry)
                                                                <option value="{{$filterCountry->id}}" {{request('country') == $filterCountry->id ? 'selected' : ''}} >{{$filterCountry->country_name}}</option>
                                                            @endforeach
                                                        @endif



                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="state" id="state_id" class="form-control" aria-label="select">
                                                        @if(get_option('countries_usage') == 'single_country')
                                                            <option value="all">Select State</option>
                                                            @foreach(single_country_for_ad_filter()->states as $state)
                                                                <option value="{{$state->id}}" {{request('state') == $state->id ? 'selected' : ''}} >{{$state->state_name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="all">Sélectionner un état</option>
                                                            @foreach($filterStates as $filterState)
                                                                <option
                                                                    value="{{$filterState->id}}" {{request('state') == $filterState->id ? 'selected' : ''}} >{{$filterState->state_name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="city" id="city_id" class="form-control"
                                                            aria-label="select">
                                                        <option value="all">Select City</option>
                                                        @foreach($filterCities as $filterCity)
                                                            <option
                                                                value="{{$filterCity->id}}" {{request('city') == $filterCity->id ? 'selected' : ''}} >{{$filterCity->city_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 bg-light-pink p-3 rounded">
                                                <p class="mb-2 font-weight-strong">Condition</p>
                                                <div class="form-check">
                                                    <label class="cute-label">
                                                        <input type="radio" name="condition"
                                                               value="new" {{request('condition') == 'new' ? 'checked' : ''}} >
                                                        Nouveau
                                                        <span class="cute-radio"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="cute-label">
                                                        <input type="radio" name="condition"
                                                               value="used" {{request('condition') == 'used' ? 'checked' : ''}} >
                                                        Réconditionner 
                                                        <span class="cute-radio"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="toggle-item mb-3">
                                                <p class="filter-block-title">Prix (Min-Max)</p>
                                                <div class="row small-gutters">
                                                    <div class="col">
                                                        <input type="number" name="price_min"
                                                               value="{{request('price_min')}}" min="1"
                                                               placeholder="Min" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <input type="number" name="price_max"
                                                               value="{{request('price_max')}}" min="1"
                                                               placeholder="Max" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end flex-wrap mx-n1">
                                                <div class="px-1">
                                                    <button type="submit" class="btn btn-brand-secondary"><i
                                                            class="fa fa-search"></i> Recherche
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        @if(get_option('enable_monetize') == 1 && get_option('all_ads_page_bottom_of_left_side_bar'))
                            <div class="ads my-4">
                                {!! get_option('all_ads_page_bottom_of_left_side_bar') !!}
                            </div>
                        @endif

                    </div>

                    <div class="col-lg-8 col-xl-9">
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
