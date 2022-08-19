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
                <div class="card-body">
                    <form action="{{route('save_payment_settings')}}" class="form-horizontal PaymentSetting "
                          enctype="multipart/form-data"
                          method="post"> @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">

                                <div class="form-group {{ $errors->has('enable_paypal')? 'is-invalid':'' }}">
                                    <label class="col-md-12 control-label">Activer/désactiver PayPal</label>
                                    <div class="col-md-12">
                                        <label for="enable_paypal" class="checkbox-inline">
                                            <input type="checkbox" value="1" id="enable_paypal"
                                                   name="enable_paypal" {{ get_option('enable_paypal') == 1 ? 'checked="checked"': '' }}>
                                                   Activer PayPal
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('enable_stripe')? 'is-invalid':'' }}">
                                    <label class="col-md-12 control-label">Activer/désactiver Stripe </label>
                                    <div class="col-md-12">
                                        <label for="enable_stripe" class="checkbox-inline">
                                            <input type="checkbox" value="1" id="enable_stripe"
                                                   name="enable_stripe" {{ get_option('enable_stripe') == 1 ? 'checked="checked"': '' }}>
                                                   Activer Stripe
                                        </label>
                                    </div>
                                </div>

                                <div id="paypal_settings_wrap"
                                     style="display: {{ get_option('enable_paypal') == 1 ? 'block' : 'none' }}">
                                    <hr/>
                                    <legend>Activer PayPal</legend>
                                    <div
                                        class="form-group {{ $errors->has('enable_paypal_sandbox')? 'is-invalid':'' }}">
                                        <label class="col-md-12 control-label">@lang('PayPal Mode') </label>
                                        <div class="col-md-12">
                                            <label for="paypal_mode_sandbox" class="checkbox-inline mr-2">
                                                <input type="radio" name="PAYPAL_MODE" value="sandbox"
                                                       id="paypal_mode_sandbox" {{ $_ENV['PAYPAL_MODE'] == 'sandbox' ? 'checked="checked"': '' }}>
                                                @lang('Sandbox')
                                            </label>

                                            <label for="paypal_mode_live" class="checkbox-inline">
                                                <input type="radio" name="PAYPAL_MODE" value="live"
                                                       id="paypal_mode_live" {{ $_ENV['PAYPAL_MODE'] == 'live' ? 'checked="checked"': '' }}>
                                                @lang('Live')
                                            </label>

                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('paypal_client_id')? 'is-invalid':'' }}">
                                        <label for="paypal_client_id"
                                               class="col-sm-12 control-label">PayPal Client ID</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="paypal_client_id"
                                                   value="{{$_ENV['PAYPAL_CLIENT_ID']}}"
                                                   name="PAYPAL_CLIENT_ID">
                                            <p class="text-danger custom-font-bold">Test PayPal Client ID</p>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('PAYPAL_SECRET')? 'is-invalid':'' }}">
                                        <label for="PAYPAL_SECRET"
                                               class="col-sm-12 control-label">PayPal Secret</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="PAYPAL_SECRET"
                                                   value="{{$_ENV['PAYPAL_SECRET']}}"
                                                   name="PAYPAL_SECRET">
                                            <p class="text-danger custom-font-bold">PayPal Secret</p>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-md-6  col-sm-12">


                                <div class="{{ get_option('enable_stripe') == 1 ? 'display-block' : 'display-none' }}" id="stripe_settings_wrap">

                                    <legend>Stripe Settings</legend>
                                    <div class="form-group {{ $errors->has('stripe_test_mode')? 'is-invalid':'' }}">
                                        <label class="col-md-12 control-label">Test Mode</label>
                                        <div class="col-md-12">
                                            <label for="stripe_test_mode" class="checkbox-inline">
                                                <input type="checkbox" value="1" id="stripe_test_mode"
                                                       name="stripe_test_mode" {{ get_option('stripe_test_mode') == 1 ? 'checked="checked"': '' }}>
                                                       Activer Test Mode
                                            </label>
                                        </div>
                                    </div>

                                    <div
                                        class="form-group {{ $errors->has('stripe_test_secret_key')? 'is-invalid':'' }}">
                                        <label for="stripe_test_secret_key"
                                               class="col-sm-12 control-label">Test Secret Key</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="stripe_test_secret_key"
                                                   value="{{ old('stripe_test_secret_key')? old('stripe_test_secret_key') : get_option('stripe_test_secret_key') }}"
                                                   name="stripe_test_secret_key" placeholder="Test Secret Key">
                                        </div>
                                    </div>

                                    <div
                                        class="form-group {{ $errors->has('stripe_test_publishable_key')? 'is-invalid':'' }}">
                                        <label for="stripe_test_publishable_key"
                                               class="col-sm-12 control-label">Test Publishable Key</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="stripe_test_publishable_key"
                                                   value="{{ old('stripe_test_publishable_key')? old('stripe_test_publishable_key') : get_option('stripe_test_publishable_key') }}"
                                                   name="stripe_test_publishable_key"
                                                   placeholder="Test Publishable Key">
                                        </div>
                                    </div>

                                    <div
                                        class="form-group {{ $errors->has('stripe_live_secret_key')? 'is-invalid':'' }}">
                                        <label for="stripe_live_secret_key"
                                               class="col-sm-12 control-label">Live Secret Key</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="stripe_live_secret_key"
                                                   value="{{ old('stripe_live_secret_key')? old('stripe_live_secret_key') : get_option('stripe_live_secret_key') }}"
                                                   name="stripe_live_secret_key" placeholder="Live Secret Key">
                                        </div>
                                    </div>

                                    <div
                                        class="form-group {{ $errors->has('stripe_live_publishable_key')? 'is-invalid':'' }}">
                                        <label for="stripe_live_publishable_key"
                                               class="col-sm-12 control-label">Live Publishable Key</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="stripe_live_publishable_key"
                                                   value="{{ old('stripe_live_publishable_key')? old('stripe_live_publishable_key') : get_option('stripe_live_publishable_key') }}"
                                                   name="stripe_live_publishable_key"
                                                   placeholder="Live Publishable Key">

                                        </div>
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


                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/payment-setting.js')}}"></script>

@stop
