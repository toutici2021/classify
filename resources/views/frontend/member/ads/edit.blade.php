@extends('frontend.member-master')
@section('content')
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

                                <h3 class="mb-4 border-bottom pb-2 text-muted">Metre à jour l'annonce</h3>

                                <form method="post" action="{{route('memberUpdateAds', [$ad->id])}}"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="post-form">
                                        <div class="form-group">
                                            <label class="post-form-label">Sélectionnez une catégorie<span
                                                    class="text-danger">*</span></label>
                                            <select name="category" id="category"
                                                    class="select2 form-control {{$errors->has('category') ? 'is-invalid':''}} "
                                                    data-placeholder="Choose one thing" data-allow-clear="1">
                                                <option value=""> -- Sélectionnez une catégorie --</option>
                                                @foreach($categories as $category)
                                                    @if($category->sub_categories->count() > 0)
                                                        <optgroup label="{{ $category->category_name }}">
                                                            @foreach($category->sub_categories as $sub_category)
                                                                <option
                                                                    value="{{ $sub_category->id }}" {{ $ad->sub_category_id == $sub_category->id ? 'selected': '' }} >{{ $sub_category->category_name }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if($errors->has('category')) <span class="error"> <i
                                                    class="fa fa-warning"></i> {{ $errors->first('category') }}</span> @endif
                                        </div>

                                        <div class="form-group">
                                            <label class="post-form-label" for="brand_select">Sélectionnez une marque</label>
                                            <select name="brand" id="brand_select"
                                                    class="select2 form-control {{$errors->has('brand') ? 'is-invalid':''}} "
                                                    data-placeholder="Choose one thing" data-allow-clear="1">
                                                <option value=""> -- Sélectionnez une marque --</option>
                                                @if(old('category'))
                                                    @foreach(brandByCategory(old('category')) as $brand)
                                                        <option
                                                            value="{{ $brand->id }}" {{ old('brand') == $brand->id ? 'selected':'' }}>{{ $brand->brand_name }}</option>
                                                    @endforeach
                                                @else
                                                    @foreach(brandByCategory($ad->sub_category_id) as $brand)
                                                        <option
                                                            value="{{ $brand->id }}" {{ $ad->brand_id == $brand->id ? 'selected':'' }}>{{ $brand->brand_name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <small class="text-danger custom-font-bold">Choisir une autre marque si votre marque n'est pas sélectionner </small>
                                        </div>

                                        <div class="form-group">
                                            <label class="post-form-label">Ad Title</label>
                                            <input type="text" name="ad_title" placeholder="Ad Title" id="ad_title"
                                                   value="{{ $ad->title}}"
                                                   class="form-control {{$errors->has('ad_title') ? 'is-invalid':''}} ">
                                            @if ($errors->has('ad_title')) <span
                                                class="error">{{ $errors->first('ad_title') }}</span><br>
                                            @endif

                                            <small class="text-danger custom-font-bold"> Entrez un titre complet entre
                                                70/100 mots.</small>

                                        </div>

                                        <div class="form-group">
                                            <label class="post-form-label" id="ad_description">Ajoutez une descrition</label>
                                            <textarea name="ad_description" id="ad_description"
                                                      class="form-control" rows="6"
                                                      placeholder="Ajoutez une descrition">{{ $ad->description }}</textarea>
                                            @if ($errors->has('ad_description')) <span
                                                class="error">{{ $errors->first('ad_description') }}</span> <br>
                                            @endif
                                            <small class="text-danger custom-font-bold"> A meaningful
                                                description will help
                                                users to know about your
                                                ads.</small>
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label" for="condition">Condition</label>
                                                    <select name="condition" id="condition"
                                                            class="form-control {{$errors->has('condition') ? 'is-invalid':''}}">
                                                        <option
                                                            value="new" {{ $ad->ad_condition == 'new' ? 'selected':'' }}>
                                                            Nouveau
                                                        </option>
                                                        <option
                                                            value="used" {{ $ad->ad_condition == 'used' ? 'selected':'' }}>
                                                            Réconditionnée
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
                                                                       value="{{ $ad->price }}" min="0"
                                                                       class="form-control input-number {{$errors->has('price') ? 'is-invalid':''}} "
                                                                       placeholder="Price">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('price')) <span
                                                                    class="error">{{ $errors->first('price') }}</span> @endif
                                                                <small class="text-danger custom-font-bold">Mettre un bon prix
                                                                    </small>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <label class="cute-label text-muted text-nowrap mb-0">
                                                                <input type="checkbox" value="1" name="negotiable"
                                                                       id="negotiable" {{ $ad->is_negotiable == 1 ? 'checked':'' }} >
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
                                                            @foreach($ad->media_img as $img)
                                                                <li class="upload-item mb-3 mr-3 border rounded">
                                                                    <img class="uploaded-img"
                                                                         src="{{asset('public/uploads/ad/' . $img->media_name)}}"
                                                                         alt="File"><br>
                                                                    <button type="button" data-id="{{$img->id}}"
                                                                            class="remove-uploaded"><span
                                                                            class="text">×</span>
                                                                    </button>
                                                                </li>
                                                            @endforeach
                                                            <div id="removed_image_ids"></div>
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
                                                                    class="fa fa-paperclip mr-2"></i> Cliquez ici pour mettre une
                                                                images</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="video_url" class="col-sm-12 control-label">URL Vidéo
                                                    :</label>
                                                <div class="col-sm-12">
                                                    <input type="text"
                                                           class="form-control {{$errors->has('video_url') ? 'is-invalid':''}}"
                                                           id="video_url" value="{{ $ad->video_url  }}" name="video_url"
                                                           placeholder="Video Url">
                                                    <small class="text-danger custom-font-bold">Ajoutez youtube, vimeo
                                                        ou un autre média
                                                        url vidéo, ex.
                                                        https://www.youtube.com/watch?v=video_id</small></div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="post-form-label">@lang('default.country')</label>
                                            <select name="country"
                                                    class="select2 form-control {{$errors->has('country') ? 'is-invalid':''}} "
                                                    data-placeholder="Choose one thing" data-allow-clear="1">
                                                <option value=""> -- Sélectionnez un pays --</option>

                                                @if(get_option('countries_usage') == 'single_country')
                                                    <option value="{{single_country_for_ad_filter()->id}}"
                                                            selected>{{single_country_for_ad_filter()->country_name}}</option>
                                                @else
                                                    <option value="all">Tous les pays</option>
                                                    @foreach($countries as $country)
                                                        <option
                                                            value="{{ $country->id }}" {{ $ad->country_id == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
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
                                                            data-placeholder="Choose one thing" data-allow-clear="1">
                                                        <option value=""> -- Sélectionnez un état --</option>


                                                        @if(get_option('countries_usage') == 'single_country')
                                                            <option value="all">Sélectionnez un état</option>
                                                            @foreach(single_country_for_ad_filter()->states as $state)
                                                                <option
                                                                    value="{{ $state->id }}" {{ $ad->state_id == $state->id ? 'selected' :'' }}>{{ $state->state_name }}</option>     @endforeach

                                                        @endif

                                                    </select>
                                                    @if($errors->has('state')) <span
                                                        class="error">{{ $errors->first('state') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        class="post-form-label {{$errors->has('city') ? 'is-invalid':''}}">Ville</label>
                                                    <select
                                                        class="select2 form-control {{$errors->has('city') ? 'is-invalid':''}}"
                                                        id="city_select" name="city" data-placeholder="Choose one thing"
                                                        data-allow-clear="1">
                                                        @if($ad->state)
                                                            @foreach($ad->state->cities as $city)
                                                                <option
                                                                    value="{{ $city->id }}" {{ $ad->city_id == $city->id ? 'selected':'' }}>{{ $city->city_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if($errors->has('city')) <span
                                                        class="error">{{ $errors->first('city') }}</span> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-divider-title">
                                            <h6>Information sur le vendeur</h6>
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Nom du vendeur</label>
                                                    <input type="text" name="seller_name" id="seller_name"
                                                           value="{{ $ad->seller_name }}" placeholder="Nom"
                                                           class="form-control {{ $errors->has('seller_name')? 'is-invalid':'' }} ">
                                                    @if ($errors->has('seller_name')) <span
                                                        class="error">{{ $errors->first('seller_name') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Email du vendeur</label>
                                                    <input type="email" name="seller_email" id="seller_email"
                                                           value="{{ $ad->seller_email }}" placeholder="Email"
                                                           class="form-control {{ $errors->has('seller_email')? 'is-invalid':'' }}">
                                                    @if ($errors->has('seller_email')) <span
                                                        class="error">{{ $errors->first('seller_email') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Numéro de téléphone du vendeur</label>
                                                    <input type="text" id="seller_phone" name="seller_phone"
                                                           value="{{$ad->seller_phone}}" placeholder="téléphone"
                                                           class="form-control {{ $errors->has('seller_phone')? 'is-invalid':'' }}">
                                                    @if ($errors->has('seller_phone')) <span
                                                        class="error">{{ $errors->first('seller_phone') }}</span> @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="post-form-label">Adresse du vendeur</label>
                                                    <input type="text" id="address" value="{{ $ad->address }}"
                                                           name="address" placeholder="Adresse"
                                                           class="form-control {{ $errors->has('address')? 'is-invalid':'' }} ">
                                                    @if ($errors->has('address')) <span
                                                        class="error">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="text-center mt-lg-5 float-right">
                                                <button type="submit" class="btn btn-brand-secondary"><i
                                                        class="fa fa-save"></i> Enregistrer & Mettre à jour
                                                </button>
                                            </div>
                                        </div>
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
    <!--============ Summernote =================-->
    <script type="text/javascript" src="{{asset('public/member/js/summernote-bs4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/member/js/partial/ad-post.js')}}"></script>
@endsection
