@extends('master')
@section('title')
    {{$title}}
@stop



@section('content')
    <div class="row">
        <div class="col-md-12 mb-1">

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('store_ads')}}" method="post" class="create-ads"
                          enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="category" class="col-sm-12 control-label">Selectionnez un catégorie</label>
                                    <div class="col-sm-12">
                                        <select
                                            class="form-control select2 {{$errors->has('category') ? 'is-invalid':''}}"
                                            name="category" id="category">
                                            <option value="">Selectionnez un catégorie</option>
                                            @foreach($categories as $category)
                                                @if($category->sub_categories->count() > 0)
                                                    <optgroup label="{{ $category->category_name }}">
                                                        @foreach($category->sub_categories as $sub_category)
                                                            <option
                                                                value="{{ $sub_category->id }}" {{ old('category') == $sub_category->id ? 'selected': '' }}>{{ $sub_category->category_name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category'))
                                            <span class="error">{{ $errors->first('category') }}</span>
                                        @endif

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="brand_select" class="col-sm-12 control-label">
                                        Selectionnez une marque
                                    </label>

                                    <div class="col-sm-12">
                                        <select class="form-control select2 {{$errors->has('brand') ? 'is-invalid':''}}"
                                                name="brand" id="brand_select">
                                            <option value="">Selectionnez une marque</option>
                                        </select>
                                        <small class="text-danger custom-font-bold">Passer la sélection de la marque si votre article
                                            ne fait pas
                                            appartenir à n'importe
                                            marque.
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ad_title" class="col-sm-12 control-label">Ad Title</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{$errors->has('ad_title') ? 'is-invalid':''}}"
                                               id="ad_title" value="{{ old('ad_title') }}"
                                               name="ad_title" placeholder="Ad Title">
                                        @if ($errors->has('ad_title'))
                                            <span class="error">{{ $errors->first('ad_title') }}</span><br>
                                        @endif
                                        <small class="text-danger custom-font-bold"> Essayez de compléter le titre entre
                                            70/100
                                            mots.</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ad_title" class="col-sm-12 control-label">Ad Description</label>
                                    <div class="col-sm-12">
                                    <textarea name="ad_description"
                                              class="form-control  {{$errors->has('ad_description') ? 'is-invalid':''}}"
                                              rows="6"
                                              placeholder="Ad Description">{{ old('ad_description') }}</textarea>
                                        @if ($errors->has('ad_description'))
                                            <span class="error">{{ $errors->first('ad_description') }}</span><br>
                                        @endif
                                        <small class="text-danger custom-font-bold"> Une description significative aidera
                                            utilisateurs de connaître votre
                                            les publicités.</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="condition" class="col-sm-4 control-label">Conditions</label>
                                    <div class="col-sm-12">
                                        <select
                                            class="form-control select2 {{$errors->has('condition') ? 'is-invalid':''}}"
                                            name="condition" id="condition">
                                            <option
                                                value="new" {{ old('condition') == 'new' ? 'selected':'' }}>nouveau
                                            </option>
                                            <option
                                                value="used" {{ old('condition') == 'used' ? 'selected':'' }}>Réconditionné
                                            </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-md-12 control-label">Prix</label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                  id="basic-addon1">{{ get_option('currency_sign') }}</span>
                                            </div>
                                            <input type="text" placeholder="Price"
                                                   class="form-control {{$errors->has('price') ? 'is-invalid':''}}"
                                                   name="price" id="price" value="{{ old('price') }}"/>
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="error">{{ $errors->first('price') }}</span>
                                        @endif
                                        <p class="text-danger custom-font-bold">Choisissez un bon prix</p>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="negotiable"
                                                       id="negotiable" {{ old('negotiable') == 1 ? 'checked':'' }}>
                                                       Négociable
                                            </label>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group {{ $errors->has('images')? 'has-error':'' }}">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="" class="col-sm-12 control-label"></label>
                                            <div class="col-sm-12">
                                                <div class="uploaded-field d-flex flex-wrap align-items-center">
                                                    <ul class="list-unstyled upload-file-list d-flex flex-wrap mb-0"></ul>
                                                    <div class="multiple-attach-file mx-auto">
                                                        <div class="attach-file-input">
                                                            <input type="file" name="images[]" accept="image/*"
                                                                   class="multiple-file-upload" id="attachFileMultiple"
                                                                   multiple/>
                                                        </div>
                                                        <label for="attachFileMultiple" class="text-nowrap"><i
                                                                class="fa fa-paperclip mr-2"></i> Cliquez ici pour télécharger
                                                                images</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ad_title" class="col-sm-12 control-label">URL de la vidéo:</label>
                                        <div class="col-sm-12">
                                            <input type="text"
                                                   class="form-control {{$errors->has('video_url') ? 'is-invalid':''}}"
                                                   id="video_url"
                                                   value="{{ old('video_url') }}" name="video_url"
                                                   placeholder="Video Url">
                                            <small class="text-danger custom-font-bold">Ajoutez youtube, vimeo ou n'importe quel média
                                                URL de streaming, ex.
                                                https://www.youtube.com/watch?v=video_id</small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <legend>Information de Lieu</legend>

                                <div class="form-group ">
                                    <label for="category_name" class="col-sm-12 control-label">Country</label>
                                    <div class="col-sm-12">
                                        <select
                                            class="form-control select2 {{$errors->has('country') ? 'is-invalid':''}}"
                                            name="country">
                                            <option value="">Choisissez un pays</option>

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
                                        @if ($errors->has('country'))
                                            <span class="error">{{ $errors->first('country') }}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="State" class="col-sm-12 control-label">State</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2 {{$errors->has('state') ? 'is-invalid':''}}"
                                                id="state_select" name="state">
                                            @if($previous_states->count() > 0)
                                                @foreach($previous_states as $state)
                                                    <option
                                                        value="{{ $state->id }}" {{ old('state') == $state->id ? 'selected' :'' }}>{{ $state->state_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('state'))
                                            <span class="error">{{ $errors->first('state') }}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="City" class="col-sm-12 control-label">City</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2 {{$errors->has('city') ? 'is-invalid':''}}"
                                                id="city_select" name="city">
                                            @if($previous_cities->count() > 0)
                                                @foreach($previous_cities as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected':'' }}>{{ $city->city_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('city'))
                                            <span class="error">{{ $errors->first('city') }}</span>
                                        @endif

                                    </div>
                                </div>

                                <legend>Informations sur le vendeur</legend>


                                <div class="form-group">
                                    <label for="seller_name"
                                           class="col-sm-12 control-label">Nom du Vendeur</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{ $errors->has('seller_name')? 'is-invalid':'' }}"
                                               id="seller_name"
                                               value="{{ old('seller_name')? old('seller_name') : $lUser->name }}"
                                               name="seller_name" placeholder="Seller Name">
                                        @if ($errors->has('seller_name'))
                                            <span class="error">{{ $errors->first('seller_name') }}</span>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="seller_email" class="col-sm-12 control-label">E-mail du vendeur</label>
                                    <div class="col-sm-12">
                                        <input type="email"
                                               class="form-control {{ $errors->has('seller_email')? 'is-invalid':'' }}"
                                               id="seller_email"
                                               value="{{ old('seller_email')? old('seller_email') : $lUser->email }}"
                                               name="seller_email" placeholder="Email">
                                        @if ($errors->has('seller_email'))
                                            <span class="error">{{ $errors->first('seller_email') }}</span>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="seller_phone" class="col-sm-12 control-label">Téléphone du vendeur</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{ $errors->has('seller_phone')? 'is-invalid':'' }}"
                                               id="seller_phone"
                                               value="{{ old('seller_phone') ? old('seller_phone') : $lUser->phone }}"
                                               name="seller_phone" placeholder="Phone">
                                        @if ($errors->has('seller_phone'))
                                            <span class="error">{{ $errors->first('seller_phone') }}</span>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-sm-12 control-label">Adresse du vendeur</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{ $errors->has('address')? 'is-invalid':'' }}"
                                               id="address"
                                               value="{{ old('address')? old('address') : $lUser->address }}"
                                               name="address" placeholder="Address">
                                        @if ($errors->has('address'))
                                            <span class="error">{{ $errors->first('address') }}</span><br>
                                        @endif

                                        <small class="text-danger custom-font-bold">L'adresse aidera l'acheteur à savoir
                                            sur votre emplacement plus
                                            avec précision</small>
                                    </div>
                                </div>


                                <div class="price_input_group">
                                    <div class="form-group">
                                        <label for="address" class="col-sm-12 control-label">Price Plan:</label>
                                        <div class="col-sm-12">
                                            <div class="form-check-inline">
                                                <label class="cute-label">
                                                    <input type="radio" name="price_plan"
                                                           value="regular" {{old('price_plan') == 'regular' ? 'checked' : ''}}
                                                    > Gratuit
                                                    <span class="cute-radio"></span>
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="cute-label">
                                                    <input type="radio" name="price_plan"
                                                           value="premium" {{old('price_plan') == 'premium' ? 'checked' : ''}}
                                                    >
                                                    Premium
                                                    <span class="cute-radio"></span>
                                                </label>
                                            </div>

                                            <div class="mt-2">
                                                @if ($errors->has('price_plan')) <span
                                                    class="error">{{ $errors->first('price_plan') }}</span>
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="cute-label">
                                                <input type="checkbox" name="mark_ad_urgent" value="1"
                                                       {{old('mark_ad_urgent') == 1 ? 'checked' : '' }}
                                                       data-price="{{ get_option('urgent_ads_price')  }}"
                                                       class="mark_ad_urgent"> Marquer comme urgent
                                                <span class="cute-check"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-0 col-sm-12">
                                        <button type="submit" class="btn btn-danger float-right"><i
                                                class="fa fa-save"></i> Créer de nouvelles annonces
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('assets/dist/css/image-preview.css')}}">
@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/ad-post.js')}}"></script>
@stop
