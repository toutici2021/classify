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
                        <p class="text-danger custom-font-bold">Yous pouvez monétiser votre site Web avec adsens ou quelque chose
                            comme ça. Insérez votre code d'annonce ci-dessous
                            code de bloc d'emplacement, l'annonce apparaîtra à cet emplacement</p>
                        <br>
                        <div class="form-group {{ $errors->has('enable_monetize')? 'has-error':'' }}">
                            <label class="col-md-12 control-label">Enable/Disable </label>
                            <div class="col-md-8">
                                <label for="enable_monetize" class="checkbox-inline">
                                    <input type="checkbox" value="1" id="enable_monetize"
                                           name="enable_monetize" {{ get_option('enable_monetize') == 1 ? 'checked="checked"': '' }}>
                                           Activer la monétisation
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="home_page_below_premium_ads_section"
                                   class="col-sm-12 control-label">[ Home Page ] Below Premium Ads Section </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="home_page_below_premium_ads_section"
                                      class="form-control">{{ get_option('home_page_below_premium_ads_section') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="home_page_below_regular_ads_section"
                                   class="col-sm-12 control-label">[ Home Page ] Below Regular Ads Section </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="home_page_below_regular_ads_section"
                                      class="form-control">{{ get_option('home_page_below_regular_ads_section') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category_page_below_list_section"
                                   class="col-sm-12 control-label"> [ Category Page ] Below Categories List Section </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="category_page_below_list_section"
                                      class="form-control">{{ get_option('category_page_below_list_section') }}</textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="category_page_below_list_section"
                                   class="col-sm-12 control-label"> [Ads List By Category Page ] Bottom of Left Side Bar  </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="category_page_below_list_section"
                                      class="form-control">{{ get_option('category_page_below_list_section') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="premium_ads_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ Premium Ads Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="premium_ads_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('premium_ads_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular_ads_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ Regular Ads Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="regular_ads_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('regular_ads_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="all_ads_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ All Ads Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="all_ads_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('all_ads_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="search_ads_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ Search Result Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="search_ads_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('search_ads_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ad_details_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ Ad Details Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="ad_details_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('ad_details_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ad_details_below_latest_comments_section"
                                   class="col-sm-12 control-label"> [ Ad Details Page ] Below Latest Comments Section </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="ad_details_below_latest_comments_section"
                                      class="form-control">{{ get_option('ad_details_below_latest_comments_section') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="store_detsils_page_bottom_of_left_side_bar"
                                   class="col-sm-12 control-label"> [ Member Store Details Page ] Bottom of Left Side Bar </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="store_detsils_page_bottom_of_left_side_bar"
                                      class="form-control">{{ get_option('store_detsils_page_bottom_of_left_side_bar') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact_us_bottom_of_page_content"
                                   class="col-sm-12 control-label"> [ Contact Us Page ] Bottom of Page Content </label>
                            <div class="col-sm-12">
                            <textarea rows="12" cols="8" name="contact_us_bottom_of_page_content"
                                      class="form-control">{{ get_option('contact_us_bottom_of_page_content') }}</textarea>
                            </div>
                        </div>



                        <hr/>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" id="settings_save_btn"
                                        class="btn btn-danger">Save Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
        $(document).ready(function () {

            $('input[type="checkbox"], input[type="radio"]').click(function () {
                const input_name = $(this).attr('name');
                let input_value = 0;
                if ($(this).prop('checked')) {
                    input_value = $(this).val();
                }
                $.ajax({
                    url: '{{ route('save_settings') }}',
                    type: "POST",
                    data: {[input_name]: input_value, '_token': '{{ csrf_token() }}'}
                });
            });

            /**
             * Send settings option value to server
             */
            $('#settings_save_btn').click(function (e) {
                e.preventDefault();

                const this_btn = $(this);
                this_btn.attr('disabled', 'disabled');

                const form_data = this_btn.closest('form').serialize();
                $.ajax({
                    url: '{{ route('save_settings') }}',
                    type: "POST",
                    data: form_data,
                    success: function (data) {
                        if (data.success === 1) {
                            this_btn.removeAttr('disabled');
                            toastr["success"](data.message);
                        }
                    }
                });
            });

        });
    </script>
@stop
