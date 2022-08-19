@extends('frontend.member-master')
@section('content')

<!--essayer le js -->




    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">

            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            <!--============= Aside ============-->
                            @include('frontend.member.common.sidebar')

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content">

                            <div class="user-theme-block p-xl-5">

                                <h3 class="mb-4 border-bottom pb-2">Créer une annonce</h3>

                                <form method="post" action="{{route('memberStoreAds')}}" enctype="multipart/form-data">
                                    
                                    @csrf

                                    <div class="post-form">

                                        


                                        <div class="form-group">
                                            <label class="post-form-label">Choisissez une catégorie<span
                                                    class="text-danger">*</span></label>
                                            <select name="category" id="category"
                                                    class="select2 form-control {{$errors->has('category') ? 'is-invalid':''}} "
                                                    data-placeholder="------------" data-allow-clear="1" onchange="showDiv('hidden_div', this)">
                                                <option value="1"> -- Choisissez une catégorie --</option>
                                                
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected': '' }}>{{ $category->category_name }}</option>
                                                            @endforeach

                                            </select>
                                            @if($errors->has('category')) <span class="error"> <i
                                                    class="fa fa-warning"></i> {{ $errors->first('category') }}</span> @endif
                                        </div>

                                       

                                        <div class="form-group" id="hidden_div">
                                            <label class="post-form-label" for="brand_select">Sélectionner la marque</label>
                                            <select name="brand" id="brand_select"
                                                    class="select2 form-control {{$errors->has('brand') ? 'is-invalid':''}} "
                                                    data-placeholder="------------" data-allow-clear="1">
                                                <option value=""> -- Sélectionnez une marque --</option>
                                                @if(old('category'))
                                                    @foreach(brandByCategory(old('category')) as $brand)
                                                        <option
                                                            value="{{ $brand->id }}" {{ old('brand') == $brand->id ? 'selected':'' }}>{{ $brand->brand_name }}</option>
                                                    @endforeach
                                                @endif


                                            </select>
                                            <small class="text-danger custom-font-bold">Ignorez la sélection de la marque si votre article n'appartient à aucune marque. </small>
                                        </div>

                                        <div class="form-group">
                                            <label class="post-form-label">ajouter un titre</label>
                                            <input type="text" name="ad_title" placeholder="ajouter un titre" id="ad_title"
                                                   value="{{ old('ad_title') }}"
                                                   class="form-control {{$errors->has('ad_title') ? 'is-invalid':''}} ">
                                            @if ($errors->has('ad_title')) <span
                                                class="error">{{ $errors->first('ad_title') }}</span><br>
                                            @endif

                                            <small class="text-danger custom-font-bold"> Essayez de compléter le titre entre 70/100 mots.</small>

                                        </div>

                                        <div class="form-group">
                                            <label class="post-form-label" id="ad_description">Ajouter une description</label>
                                            <textarea name="ad_description" id="ad_description" class="form-control"
                                                      rows="6"
                                                      placeholder="Ajouter une description">{{ old('ad_description') }}</textarea>
                                            @if ($errors->has('ad_description')) <span
                                                class="error">{{ $errors->first('ad_description') }}</span> <br>
                                            @endif
                                            <small class="text-danger custom-font-bold"> Une description pertinente aidera les utilisateurs à connaître vos annonces.</small>
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label" for="condition">Conditions</label>
                                                    <select name="condition" id="condition"
                                                            class="form-control {{$errors->has('condition') ? 'is-invalid':''}}">
                                                        <option
                                                            value="new" {{ old('condition') == 'new' ? 'selected':'' }}>
                                                            Nouveau
                                                        </option>
                                                        <option
                                                            value="used" {{ old('condition') == 'used' ? 'selected':'' }}>
                                                            Réconditionné
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Prix</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mr-3 mr-lg-4">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text text-14 rounded-0">{{ get_option('currency_sign') }}</span>
                                                                </div>
                                                                <input type="number" name="price" id="price"
                                                                       value="{{ old('price') }}" min="0"
                                                                       class="form-control input-number {{$errors->has('price') ? 'is-invalid':''}} "
                                                                       placeholder="Prix">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('price')) <span
                                                                    class="error">{{ $errors->first('price') }}</span> @endif
                                                                <small class="text-danger custom-font-bold">Choisissez un bon prix</small>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <label class="cute-label text-muted text-nowrap mb-0">
                                                                <input type="checkbox" value="1" name="negotiable"
                                                                       id="negotiable" {{ old('negotiable') == 1 ? 'checked':'' }} >
                                                                <span class="text-md-down-13">Négociable</span>
                                                                <span class="cute-check"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->has('images')? 'has-error':'' }}">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="col-sm-12 control-label"></label>
                                                    <div
                                                        class="uploaded-field d-flex flex-wrap align-items-center">
                                                        <ul class="list-unstyled upload-file-list d-flex flex-wrap mb-0">
                                                        </ul>
                                                        <div class="multiple-attach-file mx-auto">
                                                            <div class="attach-file-input">
                                                                <input type="file" name="images[]"
                                                                       accept="image/*"
                                                                       class="multiple-file-upload"
                                                                       id="attachFileMultiple"
                                                                       multiple/>
                                                            </div>
                                                            <label for="attachFileMultiple" class="text-nowrap"><i
                                                                    class="fa fa-paperclip mr-2"></i> Cliquez ici pour télécharger des images</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="video_url" class="col-sm-12 control-label">URL de la vidéo:</label>
                                                <div class="col-sm-12">
                                                    <input type="text"
                                                           class="form-control {{$errors->has('video_url') ? 'is-invalid':''}}"
                                                           id="video_url" value="{{ old('video_url') }}"
                                                           name="video_url" placeholder="Video Url">
                                                    <small class="text-danger custom-font-bold">Ajoutez youtube, vimeo ou toute autre URL de diffusion multimédia, par exemple https://www.youtube.com/watch?v=video_id</small></div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="post-form-label">Pays</label>
                                            <select name="country"
                                                    class="select2 form-control {{$errors->has('country') ? 'is-invalid':''}} "
                                                    data-placeholder="------------" data-allow-clear="1">
                                                <option value=""> -- Choisissez le pays --</option>

                                                @if(get_option('countries_usage') == 'single_country')
                                                    <option value="{{single_country_for_ad_filter()->id}}"
                                                            selected>{{single_country_for_ad_filter()->country_name}}</option>
                                                @else
                                                    <option value="all">Tous les pays</option>
                                                    @foreach($countries as $country)
                                                        <option
                                                            value="{{$country->id}}">{{$country->country_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @if ($errors->has('country')) <span
                                                class="error"> {{ $errors->first('country') }} </span> @endif
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">État</label>
                                                    <select id="state_select" name="state"
                                                            class="select2 form-control {{$errors->has('state') ? 'is-invalid':''}}"
                                                            data-placeholder="------------" data-allow-clear="1">
                                                        <option value=""> -- Sélectionnez l'état --</option>
                                                        @if(get_option('countries_usage') == 'single_country')
                                                            <option value="all">Sélectionnez l'état</option>
                                                            @foreach(single_country_for_ad_filter()->states as $state)
                                                                <option
                                                                    value="{{$state->id}}">{{$state->state_name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="all">Sélectionnez l'état</option>
                                                        @endif
                                                    </select>
                                                    @if($errors->has('state')) <span
                                                        class="error">{{ $errors->first('state') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        class="post-form-label {{$errors->has('city') ? 'is-invalid':''}}">City</label>
                                                    <select
                                                        class="select2 form-control {{$errors->has('city') ? 'is-invalid':''}}"
                                                        id="city_select" name="city" data-placeholder="------------"
                                                        data-allow-clear="1">
                                                        @if($previous_cities->count() > 0)
                                                            @foreach($previous_cities as $city)
                                                                <option
                                                                    value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected':'' }}>{{ $city->city_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if($errors->has('city')) <span
                                                        class="error">{{ $errors->first('city') }}</span> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-divider-title">
                                            <h6>Informations sur le vendeur</h6>
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Nom du Vendeur</label>
                                                    <input type="text" name="seller_name" id="seller_name"
                                                           value="{{ old('seller_name')? old('seller_name') : $lUser->name }}"
                                                           placeholder="Nom"
                                                           class="form-control {{ $errors->has('seller_name')? 'is-invalid':'' }} ">
                                                    @if ($errors->has('seller_name')) <span
                                                        class="error">{{ $errors->first('seller_name') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Email du vendeur</label>
                                                    <input type="email" name="seller_email" id="seller_email"
                                                           value="{{ old('seller_email')? old('seller_email') : $lUser->email }}"
                                                           placeholder="Email"
                                                           class="form-control {{ $errors->has('seller_email')? 'is-invalid':'' }}">
                                                    @if ($errors->has('seller_email')) <span
                                                        class="error">{{ $errors->first('seller_email') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Téléphone du vendeur</label>
                                                    <input type="text" id="seller_phone" name="seller_phone"
                                                           value="{{ old('seller_phone') ? old('seller_phone') : $lUser->phone }}"
                                                           placeholder="Phone"
                                                           class="form-control {{ $errors->has('seller_phone')? 'is-invalid':'' }}">
                                                    @if ($errors->has('seller_phone')) <span
                                                        class="error">{{ $errors->first('seller_phone') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Adresse du vendeur</label>
                                                    <input type="text" id="address"
                                                           value="{{ old('address')? old('address') : $lUser->address }}"
                                                           name="address" placeholder="Adresse"
                                                           class="form-control {{ $errors->has('address')? 'is-invalid':'' }} ">
                                                    @if ($errors->has('address')) <span
                                                        class="error">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        





                                        @if(get_option('ads_price_plan') != 'all_ads_free')
                                            <div class="form-divider-title">
                                                <h6>Informations de paiement</h6>
                                            </div>
                                            <div class="price_input_group">
                                                <div class="form-group">
                                                    <label class="post-form-label">Plan tarifaire:</label>
                                                    <div>
                                                        <div class="form-check-inline">
                                                            <label class="cute-label">
                                                                <input type="radio" name="price_plan" value="regular"
                                                                       {{old('price_plan') == 'regular' ? 'checked' : ''}}
                                                                       data-price="{{ get_ads_price() }}"> Gratuit
                                                                <span class="cute-radio"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="cute-label">
                                                                <input type="radio" name="price_plan" value="premium"
                                                                       {{old('price_plan') == 'premium' ? 'checked' : ''}}
                                                                       data-price="{{ get_ads_price('premium') }}">
                                                                Premium
                                                                <span class="cute-radio"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('price_plan')) <span
                                                        class="error">{{ $errors->first('price_plan') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label class="cute-label">
                                                        <input type="checkbox" name="mark_ad_urgent" value="1"
                                                               {{old('mark_ad_urgent') == 1 ? 'checked' : '' }}
                                                               data-price="{{ get_option('urgent_ads_price')  }}"
                                                               class="mark_ad_urgent"> Marquer comme urgent
                                                        <span class="cute-check"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="display-none" id="payment_info">
                                                <div class="form-group">
                                                    <label class="post-form-label"></label>
                                                    <div class="jumbotron py-3 mt-3">
                                                        Montant payable : {{ get_option('currency_sign') }} <span
                                                            id="payable_amount">  {{ get_option('regular_ads_price') }} </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="post-form-label">Mode de paiement</label>
                                                    <select class="form-control" name="payment_method"
                                                            id="payment_method">
                                                        @if(get_option('enable_paypal') == 1)
                                                            <option
                                                                value="paypal" {{ old('payment_method') == 'paypal' ? 'selected':'' }}>
                                                                PayPal
                                                            </option>
                                                        @endif
                                                        @if(get_option('enable_stripe') == 1)
                                                            <option
                                                                value="stripe" {{ old('payment_method') == 'stripe' ? 'selected':'' }}>
                                                                Stripe
                                                            </option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>


                                        @endif

                                        <div class="text-center mt-4  mt-lg-5">
                                            <button type="submit" class="btn btn-brand-secondary float-right "><i
                                                    class="fa fa-save"></i> Créer de nouvelles annonces
                                            </button>
                                        </div>
                                        <br>

                                    </div>

                                </form>


                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>


    </main>
@endsection

@section('css')
    <!--============== Select 2 Plugin ==================-->
    <link rel="stylesheet" href="{{asset('public/member/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/member/css/select2-bootstrap4.min.css')}}">

    <!--============ Summernote ================-->
    <link rel="stylesheet" href="{{asset('public/member/css/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/member/css/partial/image-preview.css')}}">
@endsection
@section('js')
    <!--====== Select 2 Plugin =============-->
    <script type="text/javascript" src="{{asset('public/member/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/member/js/partial/ad-post.js')}}"></script>
@endsection
