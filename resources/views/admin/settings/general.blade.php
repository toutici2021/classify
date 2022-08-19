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
                <form action="{{route('save_settings')}}" method="post" class="PaymentSetting">
                    @csrf
                    <div class="card-body">


                        <form action="{{route('save_settings')}}" class="form-horizontal"
                              enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 col-xs-12">

                                    <div class="form-group {{ $errors->has('site_name')? 'has-error':'' }}">
                                        <label for="site_name"
                                               class="col-sm-12 control-label">{{__('default.site_name')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="site_name"
                                                   value="{{ old('site_name')? old('site_name') : get_option('site_name') }}"
                                                   name="site_name" placeholder="Site Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="site_title"
                                               class="col-sm-12 control-label">{{__('default.site_title')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="site_title"
                                                   value="{{ old('site_title')? old('site_title') : get_option('site_title') }}"
                                                   name="site_title" placeholder="{{__('default.site_title')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label
                                            class="col-md-12 control-label">{{__('default.enable_disable_home_page_slider')}} </label>
                                        <div class="col-md-8">
                                            <label for="enable_slider" class="checkbox-inline">
                                                <input type="checkbox" value="1"
                                                       id="enable_slider"
                                                       name="enable_slider" {{ get_option('enable_slider') == 1 ? 'checked="checked"': '' }}>
                                                {{__('default.enable_disable_home_page_slider')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="default_timezone" class="col-sm-12 control-label">
                                            {{__('default.default_time_zone')}}
                                        </label>
                                        <div
                                            class="col-sm-12 {{ $errors->has('default_timezone')? 'has-error':'' }}">
                                            <select class="form-control select2" name="default_timezone"
                                                    id="default_timezone">
                                                @php $saved_timezone = get_option('default_timezone'); @endphp
                                                @foreach(timezone_identifiers_list() as $key=>$value)
                                                    <option
                                                        value="{{ $value }}" {{ $saved_timezone == $value? 'selected':'' }}>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger custom-font-bold">{{__('default.select_time_zone_based_on_your_location')}}</p>
                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has('date_format')? 'has-error':'' }}">
                                        <label for="email_address"
                                               class="col-sm-12 control-label">{{__('default.date_format')}}</label>
                                        <div class="col-sm-12">
                                            <fieldset>
                                                @php $saved_date_format = get_option('date_format'); @endphp

                                                <label><input type="radio" value="F j, Y"
                                                              name="date_format" {{ $saved_date_format == 'F j, Y'? 'checked':'' }}> {{ date('F j, Y') }}
                                                    <code class="text-danger">F j, Y</code></label> <br/>
                                                <label><input type="radio" value="Y-m-d"
                                                              name="date_format" {{ $saved_date_format == 'Y-m-d'? 'checked':'' }}> {{ date('Y-m-d') }}
                                                    <code class="text-danger">Y-m-d</code></label> <br/>

                                                <label><input type="radio" value="m/d/Y"
                                                              name="date_format" {{ $saved_date_format == 'm/d/Y'? 'checked':'' }}> {{ date('m/d/Y') }}
                                                    <code class="text-danger">m/d/Y</code></label> <br/>

                                                <label><input type="radio" value="d/m/Y"
                                                              name="date_format" {{ $saved_date_format == 'd/m/Y'? 'checked':'' }}> {{ date('d/m/Y') }}
                                                    <code class="text-danger">d/m/Y</code></label> <br/>

                                                <label><input type="radio" value="custom"
                                                              name="date_format" {{ $saved_date_format == 'custom'? 'checked':'' }}>
                                                    {{__('default.custom')}}:</label>
                                                <input type="text" value="{{ get_option('date_format_custom') }}"
                                                       id="date_format_custom" class="form-control custom-field"
                                                       name="date_format_custom"/>
                                                <span
                                                    class="text-danger text-bold">{{__('default.example')}}: {{ date(get_option('date_format_custom')) }}</span>
                                            </fieldset>
                                            <p class="text-danger custom-font-bold"> {{__('default.preferred_date_format_description')}}
                                                . </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label
                                            class="col-md-12 control-label">{{__('default.enable_disable_disqus')}} </label>
                                        <div class="col-md-8">
                                            <label for="enable_disqus_comment_in_ads_detail" class="checkbox-inline">
                                                <input type="checkbox" value="1"
                                                       id="enable_disqus_comment_in_ads_detail"
                                                       name="enable_disqus_comment_in_ads_detail" {{ get_option('enable_disqus_comment_in_ads_detail') == 1 ? 'checked="checked"': '' }}>
                                                {{__('default.disqus_description')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disqus_shortname"
                                               class="col-sm-12 control-label">{{__('default.disqus_short_name')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="disqus_shortname"
                                                   value="{{ get_option('disqus_shortname') }}" name="disqus_shortname"
                                                   placeholder="@lang('Disqus Short Name')">
                                            <p class="text-danger custom-font-bold">{{__('default.disqus_description')}}
                                                , ex: shortname.disqus.com </p>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group {{ $errors->has('time_format')? 'has-error':'' }}">
                                        <label for="email_address"
                                               class="col-sm-12 control-label">{{__('default.time_format')}}</label>
                                        <div class="col-sm-12">
                                            <fieldset>
                                                <label><input type="radio" value="g:i a"
                                                              name="time_format" {{ get_option('time_format') == 'g:i a'? 'checked':'' }}> {{ date('g:i a') }}
                                                    <code class="text-danger">g:i a</code></label> <br/>
                                                <label><input type="radio" value="g:i A"
                                                              name="time_format" {{ get_option('time_format') == 'g:i A'? 'checked':'' }}> {{ date('g:i A') }}
                                                    <code class="text-danger">g:i A</code></label> <br/>

                                                <label><input type="radio" value="H:i"
                                                              name="time_format" {{ get_option('time_format') == 'H:i'? 'checked':'' }}> {{ date('H:i') }}
                                                    <code class="text-danger">H:i</code></label> <br/>

                                                <label><input type="radio" value="custom"
                                                              name="time_format" {{ get_option('time_format') == 'custom'? 'checked':'' }}>
                                                    Custom:</label>
                                                <input type="text" value="{{ get_option('time_format_custom') }}"
                                                       id="time_format_custom" class="form-control custom-field"
                                                       name="time_format_custom"/>
                                                <span
                                                    class="text-danger text-bold">{{__('default.example')}}: {{ date(get_option('time_format_custom')) }}</span>
                                            </fieldset>
                                            <p class="text-danger custom-font-bold"><a
                                                    href="http://php.net/manual/en/function.date.php"
                                                    target="_blank">Click here</a> to learn more about date/time format
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('currency_sign')? 'has-error':'' }}">
                                        <label for="currency_sign"
                                               class="col-sm-12 control-label">{{__('default.default_currency')}}</label>
                                        <div class="col-sm-12">
                                            <?php $current_currency = get_option('currency_sign'); ?>
                                            <select name="currency_sign" class="form-control select2">
                                                @foreach(qlab_classify_currencies() as $code => $name)
                                                    <option
                                                        value="{{ $code }}" {{ $current_currency == $code? 'selected':'' }}> {{ $code }} </option>
                                                @endforeach
                                            </select>


                                        </div>
                                    </div>


                                    <div class="form-group {{ $errors->has('logo_settings')? 'has-error':'' }}">
                                        <label for="email_address"
                                               class="col-sm-12 control-label">{{__('default.logo_settings')}}</label>
                                        <div class="col-sm-12">
                                            <fieldset>
                                                <label><input type="radio" value="show_site_name"
                                                              name="logo_settings" {{ get_option('logo_settings') == 'show_site_name'? 'checked':'' }}>
                                                    Show Site Name
                                                </label> <br/>
                                                <label><input type="radio" value="show_image"
                                                              name="logo_settings" {{ get_option('logo_settings') == 'show_image'? 'checked':'' }}>
                                                    Show Logo Image
                                                </label> <br/>
                                            </fieldset>
                                        </div>
                                    </div>


                                    <div
                                        class="form-group {{ $errors->has('verification_email_after_registration')? 'has-error':'' }}">
                                        <label for="email_address"
                                               class="col-sm-12 control-label">{{__('default.verify_email_after_user_registration')}}</label>
                                        <div class="col-sm-12">
                                            <fieldset>
                                                <label><input type="radio" value="1"
                                                              name="verification_email_after_registration" {{ get_option('verification_email_after_registration') == '1'? 'checked':'' }}>
                                                    Yes
                                                </label> <br/>
                                                <label><input type="radio" value="0"
                                                              name="verification_email_after_registration" {{ get_option('verification_email_after_registration') == '0'? 'checked':'' }}>
                                                    No
                                                </label>
                                                <br/>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div
                                        class="form-group {{ $errors->has('maximum_number_of_ad_image')? 'has-error':'' }}">
                                        <label for="maximum_number_of_ad_image"
                                               class="col-sm-12 control-label">{{__('default.maximum_number_of_ads_images')}}</label>
                                        <div class="col-sm-12">
                                            <input type="number" min="1" class="form-control"
                                                   id="maximum_number_of_ad_image"
                                                   value="{{ old('maximum_number_of_ad_image')? old('maximum_number_of_ad_image') : get_option('maximum_number_of_ad_image') }}"
                                                   name="maximum_number_of_ad_image"
                                                   placeholder="{{__('default.maximum_number_of_ads_images')}}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="site_title"
                                               class="col-sm-12 control-label">{{(__('default.footer_copyright_text'))}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="footer_copyright_text"
                                                   value="{{ old('footer_copyright_text')? old('footer_copyright_text') : get_option('footer_copyright_text') }}"
                                                   name="footer_copyright_text"
                                                   placeholder="{{__('default.footer_copyright_text')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_title"
                                               class="col-sm-12 control-label">{{__('default.site_phone_number')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="site_phone_number"
                                                   value="{{ old('site_phone_number')? old('site_phone_number') : get_option('site_phone_number') }}"
                                                   name="site_phone_number"
                                                   placeholder="{{__('default.site_phone_number')}}r">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_title"
                                               class="col-sm-12 control-label">{{__('default.company_address_in_footer')}}</label>
                                        <div class="col-sm-12">
                                            <textarea rows="3" type="text" class="form-control" name="site_address"
                                                      placeholder="{{__('default.company_address_in_footer')}}"> {{ old('site_address')? old('site_address') : get_option('site_address') }}
                                            </textarea>
                                        </div>
                                    </div>


                                    <hr/>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-12">
                                            <button type="submit" id="settings_save_btn" class="btn btn-danger"><i
                                                    class="fa fa-save"></i> {{__('default.save')}}
                                            </button>
                                        </div>
                                    </div>


                                </div>


                            </div>

                        </form>


                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/general-setting.js')}}"></script>
@stop
