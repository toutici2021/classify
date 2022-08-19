@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-body">
                    <form action="{{route('save_settings')}}" class="form-horizontal PaymentSetting"
                          enctype="multipart/form-data"
                          method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ads_moderation"
                                               class="col-sm-12 control-label">{{__('default.ads_moderation')}}</label>
                                        <div class="col-sm-12">
                                            <label>
                                                <input type="radio" name="ads_moderation"
                                                       value="need_moderation" {{ get_option('ads_moderation') == 'need_moderation'? 'checked' :'' }} />
                                                {{__('default.ads_moderation_admin_approval')}}</label>
                                            <br/>
                                            <label>
                                                <input type="radio" name="ads_moderation"
                                                       value="direct_publish" {{ get_option('ads_moderation') == 'direct_publish'? 'checked' :'' }} />
                                                {{__('default.ads_moderation_no_admin_approval')}} </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ads_price_plan"
                                               class="col-sm-12 control-label">{{__('default.ads_price_plan')}}</label>
                                        <p class="col-sm-12">
                                            <label>
                                                <input type="radio" name="ads_price_plan"
                                                       value="regular_ads_free_premium_paid" {{ get_option('ads_price_plan') == 'regular_ads_free_premium_paid'? 'checked' :'' }} />
                                                {{__('default.free_regular_ads')}} </label>
                                            <label style="display: block">
                                                <input type="radio" name="ads_price_plan"
                                                       value="all_ads_paid" {{ get_option('ads_price_plan') == 'all_ads_paid'? 'checked' :'' }} />
                                                {{__('default.all_ads_paid')}} </label>
                                        <p class="text-danger custom-font-bold"> {{__('default.ads_price_plan_description')}} </p>
                                    </div>
                                    <div
                                        class="set_pricing_wrap {{ get_option('ads_price_plan') == 'all_ads_free' ? 'display-none':'display-block' }} ">
                                        <div id="regular_ads_price_wrap"
                                             class="form-group {{ get_option('ads_price_plan') == 'regular_ads_free_premium_paid' ? 'display-none':'display-block' }} ">
                                            <label for="regular_ads_price"
                                                   class="col-sm-12 control-label">Prix des annonces gratuites</label>
                                            <div class="col-sm-12">
                                                <input type="number" min="1" class="form-control" id="regular_ads_price"
                                                       value="{{ get_option('regular_ads_price') }}"
                                                       name="regular_ads_price"
                                                       placeholder="{{__('default.price_for_regular_ads')}}">
                                                <p class="text-danger custom-font-bold"> {{__('default.price_for_regular_ads')}}</p>
                                            </div>
                                        </div>
                                        <div id="premium_ads_price_wrap"
                                             class="form-group">
                                            <label for="premium_ads_price"
                                                   class="col-sm-12 control-label">{{__('default.price_for_premium_ads')}}</label>
                                            <div class="col-sm-12">
                                                <input type="number" min="1" class="form-control" id="premium_ads_price"
                                                       value="{{ get_option('premium_ads_price') }}"
                                                       name="premium_ads_price"
                                                       placeholder="{{__('default.price_for_premium_ads')}}">
                                                <p class="text-danger custom-font-bold"> {{__('default.price_for_premium_ads')}}</p>
                                            </div>
                                        </div>
                                        <div id="urgent_ads_price_wrap"
                                             class="form-group">
                                            <label for="urgent_ads_price"
                                                   class="col-sm-12 control-label">{{__('default.urgent_ads_price')}}</label>
                                            <div class="col-sm-12">
                                                <input type="number" min="1" class="form-control" id="urgent_ads_price"
                                                       value="{{ get_option('urgent_ads_price') }}"
                                                       name="urgent_ads_price"
                                                       placeholder="Urgent ads price">
                                                <p class="text-danger custom-font-bold"> {{__('default.urgent_ads_price_description')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="form-group">
                                        <label for="number_of_urgent_ads_in_home"
                                               class="col-sm-12 control-label">{{__('default.homepage_urgent_ads_count')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_urgent_ads_in_home"
                                                   value="{{ get_option('number_of_urgent_ads_in_home') }}"
                                                   name="number_of_urgent_ads_in_home"
                                                   placeholder="{{__('default.homepage_urgent_ads_count')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ads_image_width"
                                               class="col-sm-12 control-label">{{__('default.ads_image_width')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control" id="ads_image_width"
                                                   value="{{ get_option('ads_image_width') }}"
                                                   name="ads_image_width"
                                                   placeholder="{{__('default.ads_image_width_placeholder')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ads_image_thumb_width"
                                               class="col-sm-12 control-label">{{__('default.ads_thumb_image_width')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control" id="ads_image_width"
                                                   value="{{ get_option('ads_image_thumb_width') }}"
                                                   name="ads_image_thumb_width"
                                                   placeholder="{{__('default.ads_thumb_image_width_placeholder')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number_of_premium_ads_in_home"
                                               class="col-sm-12 control-label">{{__('default.number_of_premium_ads_in_home_page')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_premium_ads_in_home"
                                                   value="{{ get_option('number_of_premium_ads_in_home') }}"
                                                   name="number_of_premium_ads_in_home"
                                                   placeholder="{{__('default.number_of_premium_ads_in_home_page')}}">
                                            <p class="text-danger custom-font-bold"> {{__('default.number_of_premium_ads_in_home_page_description')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number_of_free_ads_in_home"
                                               class="col-sm-12 control-label">{{__('default.number_of_premium_ads_in_home_page')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_free_ads_in_home"
                                                   value="{{ get_option('number_of_free_ads_in_home') }}"
                                                   name="number_of_free_ads_in_home"
                                                   placeholder="Nombre d'annonces gratuites sur la page d'accueil">
                                            <p class="text-danger custom-font-bold"> {{__('default.number_of_free_ads_in_home_page_description')}}</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ads_per_page" class="col-sm-12 control-label">Annonces par page</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control" id="ads_per_page"
                                                   value="{{ get_option('ads_per_page') }}" name="ads_per_page"
                                                   placeholder="Annonces par page">
                                            <p class="text-danger custom-font-bold"> Après ce montant, les annonces restantes seront paginées</p>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="form-group">
                                        <label for="number_of_last_days_premium_ads"
                                               class="col-sm-12 control-label">Les annonces Premium seront actives pendant un certain nombre de
                                               journées</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_last_days_premium_ads"
                                                   value="{{ get_option('number_of_last_days_premium_ads') }}"
                                                   name="number_of_last_days_premium_ads"
                                                   placeholder="Les annonces Premium seront actives pendant un certain nombre de jours">
                                            <p class="text-danger custom-font-bold"> Après expiration de ces jours, les annonces seront
                                                inactif comme
                                                prime
                                                des publicités, mais
                                                il sera disponible sous forme d'annonces gratuites.</p>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="number_of_expired_date_of_ads"
                                               class="col-sm-12 control-label">Les annonces gratuites expireront après le nombre
                                               de jours</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_expired_date_of_ads"
                                                   value="{{ get_option('number_of_expired_date_of_ads') }}"
                                                   name="number_of_expired_date_of_ads"
                                                   placeholder="Les annonces gratuites expireront après un certain nombre de jours">
                                            <p class="text-danger custom-font-bold">Une fois les annonces gratuite expirées, elles
                                                ne sera plus disponible sur place </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label
                                            class="col-sm-12 control-label">Trier par annonces premium en haut de la liste
                                            page</label>
                                        <div class="col-sm-12">
                                            <label>
                                                <input type="radio" name="order_by_premium_ads_in_listing"
                                                       value="latest" {{ get_option('order_by_premium_ads_in_listing') == 'latest'? 'checked' :'' }} />
                                                       Dernière </label>
                                            <label>
                                                <input type="radio" name="order_by_premium_ads_in_listing"
                                                       value="random" {{ get_option('order_by_premium_ads_in_listing') == 'random'? 'checked' :'' }} />
                                                       Aléatoire </label>
                                            <p class="text-danger custom-font-bold"> Trier par annonces premium dans les annonces premium
                                                page de liste.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label">{{__('default.enable_disable')}} </label>
                                        <div class="col-md-8">
                                            <label for="enable_related_ads" class="checkbox-inline">
                                                <input type="checkbox" value="1" id="enable_related_ads"
                                                       name="enable_related_ads" {{ get_option('enable_related_ads') == 1 ? 'checked="checked"': '' }}>
                                                {{__('default.related_ads')}} </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number_of_related_ads_in_detail_page"
                                               class="col-sm-12 control-label">{{__('default.number_of_related_ads_in_ads_details_page')}}
                                            detail page</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="number_of_related_ads_in_detail_page"
                                                   value="{{ get_option('number_of_related_ads_in_detail_page') }}"
                                                   name="number_of_related_ads_in_detail_page"
                                                   placeholder="Nombre d'annonces associées">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" id="settings_save_btn"
                                                    class="btn btn-danger float-right"><i
                                                    class="fa fa-save"></i> {{__('default.save')}}
                                                    Réglages
                                            </button>
                                        </div>
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

@section('script')
    <script src="{{asset('assets/dist/js/partial/ad-setting.js')}}"></script>
@stop
