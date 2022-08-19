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
                    <h3 class="card-title title-adjustment">{{$title}}</h3>
                    <a href="{{route('create_ads')}}" class="btn btn-danger float-right"><i
                            class="fab fa-buffer"></i> Créer une annonce
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{route('update_ad', [$ad->id])}}" method="post" class="create-ads"
                          enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" name="user_id" value="{{$ad->user_id}}">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="category" class="col-sm-12 control-label">Selectionnez une categorie</label>
                                    <div class="col-sm-12">
                                        <select
                                            class="form-control select2 {{$errors->has('category') ? 'is-invalid':''}}"
                                            name="category" id="category">
                                            <option value="">Selectionnez une categorie</option>
                                            @foreach($categories as $category)
                                                @if($category->sub_categories->count() > 0)
                                                    <optgroup label="{{ $category->category_name }}">
                                                        @foreach($category->sub_categories as $sub_category)
                                                            <option
                                                                value="{{ $sub_category->id }}" {{ $ad->sub_category_id == $sub_category->id ? 'selected': '' }}>{{ $sub_category->category_name }}</option>
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

                                        @if ($errors->has('brand'))
                                            <span class="error">{{ $errors->first('brand') }}</span>
                                        @endif

                                        <small class="text-danger custom-font-bold">Ignorez la sélection de la marque si votre article n'appartient à aucune marque.
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ad_title" class="col-sm-12 control-label">ajouter un titre</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{$errors->has('ad_title') ? 'is-invalid':''}}"
                                               id="ad_title" value="{{ $ad->title}}"
                                               name="ad_title" placeholder="ajouter un titre">
                                        @if ($errors->has('ad_title'))
                                            <span class="error">{{ $errors->first('ad_title') }}</span><br>
                                        @endif
                                        <small class="text-danger custom-font-bold"> Essayez de compléter le titre entre 70/100 mots.</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ad_title" class="col-sm-12 control-label">Description de l'annonce</label>
                                    <div class="col-sm-12">
                                    <textarea name="ad_description"
                                              class="form-control {{$errors->has('ad_description') ? 'is-invalid':''}}"
                                              rows="8">{{ $ad->description }}</textarea>
                                        @if ($errors->has('ad_description'))
                                            <span class="error">{{ $errors->first('ad_description') }}</span><br>
                                        @endif
                                        <small class="text-danger custom-font-bold"> Une description pertinente aidera les utilisateurs à connaître vos annonces.</small>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="condition" class="col-sm-4 control-label">Conditions</label>
                                    <div class="col-sm-12">
                                        <select
                                            class="form-control select2 {{$errors->has('condition') ? 'is-invalid':''}}"
                                            name="condition" id="condition">
                                            <option
                                                value="new" {{ $ad->ad_condition == 'new' ? 'selected':'' }}>Nouveau
                                            </option>
                                            <option
                                                value="used" {{ $ad->ad_condition == 'used' ? 'selected':'' }}>Réconditionné
                                            </option>
                                        </select>

                                        @if ($errors->has('condition'))
                                            <span class="error">{{ $errors->first('condition') }}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price" class="col-md-12 control-label">Price</label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                  id="basic-addon1">{{ get_option('currency_sign') }}</span>
                                            </div>
                                            <input type="text" placeholder="Price"
                                                   class="form-control {{$errors->has('price') ? 'is-invalid':''}}"
                                                   name="price" id="price" value="{{ $ad->price }}"/>
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="error">{{ $errors->first('price') }}</span>
                                        @endif
                                        <p class="text-danger custom-font-bold">Pick a good price</p>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="negotiable"
                                                       id="negotiable" {{ $ad->is_negotiable == 1 ? 'checked':'' }}>
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
                                                            <input type="file" name="images[]" accept="image/*"
                                                                   class="multiple-file-upload" id="attachFileMultiple"
                                                                   multiple/>
                                                        </div>
                                                        <label for="attachFileMultiple" class="text-nowrap"><i
                                                                class="fa fa-paperclip mr-2"></i> Cliquez ici pour télécharger des images</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ad_title" class="col-sm-12 control-label">Video Url:</label>
                                        <div class="col-sm-12">
                                            <input type="text"
                                                   class="form-control {{$errors->has('video_url') ? 'is-invalid':''}}"
                                                   id="video_url"
                                                   value="{{ $ad->video_url  }}" name="video_url"
                                                   placeholder="Video Url">
                                            <small class="text-danger custom-font-bold">Ajoutez youtube, vimeo ou toute autre URL de diffusion multimédia, par exemple https://www.youtube.com/watch?v=video_id</small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">


                                <legend>Information sur la localisation</legend>

                                <div class="form-group ">
                                    <label for="category_name" class="col-sm-12 control-label">Pays</label>
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
                                                        value="{{ $country->id }}" {{ $ad->country_id == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
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
                                            @if($ad->country)
                                                @foreach($ad->country->states as $state)
                                                    <option
                                                        value="{{ $state->id }}" {{ $ad->state_id == $state->id ? 'selected' :'' }}>{{ $state->state_name }}</option>
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
                                            @if($ad->state)
                                                @foreach($ad->state->cities as $city)
                                                    <option
                                                        value="{{ $city->id }}" {{ $ad->city_id == $city->id ? 'selected':'' }}>{{ $city->city_name }}</option>
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
                                               value="{{ $ad->seller_name }}"
                                               name="seller_name" placeholder="Seller Name">
                                        @if ($errors->has('seller_name'))
                                            <span class="error">{{ $errors->first('seller_name') }}</span>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="seller_email" class="col-sm-12 control-label">Email du vendeur</label>
                                    <div class="col-sm-12">
                                        <input type="email"
                                               class="form-control {{ $errors->has('seller_email')? 'is-invalid':'' }}"
                                               id="seller_email"
                                               value="{{ $ad->seller_email }}"
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
                                               value="{{$ad->seller_phone}}"
                                               name="seller_phone" placeholder="Phone">
                                        @if ($errors->has('seller_phone'))
                                            <span class="error">{{ $errors->first('seller_phone') }}</span>
                                        @endif


                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="col-sm-12 control-label">Seller Address</label>
                                    <div class="col-sm-12">
                                        <input type="text"
                                               class="form-control {{ $errors->has('address')? 'is-invalid':'' }}"
                                               id="address"
                                               value="{{ $ad->address }}"
                                               name="address" placeholder="Address">
                                        @if ($errors->has('address'))
                                            <span class="error">{{ $errors->first('address') }}</span><br>
                                        @endif

                                        <small class="text-danger custom-font-bold">L'adresse aidera l'acheteur à connaître votre emplacement plus précisément</small>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-0 col-sm-12">
                                        <button type="submit" class="btn btn-danger float-right"><i
                                                class="fa fa-save"></i> Enregistrer et mettre à jour
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
