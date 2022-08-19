<aside class="panel-aside">
    <div class="aside-content">
        <div class="aside-filter post-form rounded">
            <div id="filter">
                <form method="get" action="{{route('adsListing')}}">
                    <div class="filter-item">
                        <p class="filter-block-title">Mot clé</p>
                        <div class="form-group">
                            <input type="text" name="key" value="{{request('key')}}" autocomplete="off"
                                   placeholder="Search Keyword" class="form-control">
                        </div>
                    </div>

                    <div class="filter-item">
                        <p class="filter-block-title">@lang('default.category')</p>
                        <div class="form-group">
                            <select name="category" id="category_id" class="form-control" aria-label="select">
                                <option value="all">Toutes les catégories</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{request('category') == $category->id ? 'selected' : '' }} >{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="subcategory" id="subcategory_id" class="form-control" aria-label="select">
                                <option value="all">Toutes les catégories</option>
                            </select>
                        </div>
                    </div>

                    <div class="filter-item">
                        <p class="filter-block-title">@lang('default.brand')</p>
                        <div class="form-group">
                            <select name="brand" id="brand_id" class="form-control" aria-label="select">
                                <option value="all">Toute les marques</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="filter-item">
                        <p class="filter-block-title">@lang('default.country')</p>
                        <div class="form-group">
                            <select name="country" id="country_id" class="form-control" aria-label="select">

                                @if(get_option('countries_usage') == 'single_country')
                                    <option
                                        value="{{single_country_for_ad_filter()->id}}">{{single_country_for_ad_filter()->country_name}}</option>
                                @else
                                    <option value="all">Tous les pays</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="state" id="state_id" class="form-control" aria-label="select">

                                @if(get_option('countries_usage') == 'single_country')
                                    <option value="all">Selectionner états</option>
                                    @foreach(single_country_for_ad_filter()->states as $state)
                                        <option value="{{$state->id}}">{{$state->state_name}}</option>
                                    @endforeach
                                @else
                                    <option value="all">Selectionner états</option>
                                @endif


                            </select>
                        </div>
                        <div class="form-group">
                            <select name="city" id="city_id" class="form-control" aria-label="select">
                                <option value="all">Selectionner Ville</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4 bg-light-pink p-3 rounded">
                        <p class="mb-2 font-weight-strong">Conditions</p>
                        <div class="form-check">
                            <label class="cute-label" for="condition_new">
                                <input type="radio" name="condition" id="condition_new" value="new"> Nouveau
                                <span class="cute-radio"></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="cute-label" for="condition_used">
                                <input type="radio" name="condition" id="condition_used" value="used"> Réconditionner 
                                <span class="cute-radio"></span>
                            </label>
                        </div>
                    </div>

                    <div class="toggle-item mb-3">
                        <p class="filter-block-title">Price (Min-Max)</p>
                        <div class="row small-gutters">
                            <div class="col">
                                <input type="number" name="price_min" min="1" placeholder="Min" class="form-control">
                            </div>
                            <div class="col">
                                <input type="number" name="price_max" min="1" placeholder="Max" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end flex-wrap mx-n1">
                        <div class="px-1">
                            <button type="submit" class="btn btn-brand-secondary"><i class="fa fa-search"></i> @lang('default.search')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>
