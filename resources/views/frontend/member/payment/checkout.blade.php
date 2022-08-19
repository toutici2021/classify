@extends('frontend.member-master')
@section('content')
    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            @include('frontend.member.common.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content nicescroll">
                            <div class="user-theme-block">
                                <div class="tab-content mh-750px">
                                    <div class="tab-pane fade show active" id="v-pills-Ads" role="tabpanel"
                                         aria-labelledby="v-pills-key-Ads-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-default">

                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Revoir le commande </h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <table
                                                                class="table table-striped order-table table-bordered">
                                                                <tr>
                                                                    <td colspan="">
                                                                        <b>{{ $payment->ads->title }}</b>
                                                                    </td>
                                                                    <td colspan="">
                                                                        <b></b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <ul>
                                                                            <li>{{ ucfirst($payment->ads->price_plan) }} @if($payment->ads->mark_ad_urgent == 1)
                                                                                    + Urgent @endif Posting
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <b>{{ $payment->currency.' '.$payment->amount }}</b>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td style="background: #21a9e1;color: #fff;">
                                                                        <h5 style="color: #fff;">Order Total</h5>
                                                                    </td>
                                                                    <td style="background: #21a9e1;color: #fff;">
                                                                        <h5 style="color: #fff;"><span
                                                                                style="color:#fff;">{{ $payment->currency.' '.$payment->amount }}</span>
                                                                        </h5>
                                                                    </td>
                                                                </tr>


                                                            </table>
                                                        </div>
                                                        <div class="panel-body">

                                                            <div class="col-md-12">

                                                                @if($payment->payment_method == 'stripe')
                                                                    <form role="form"
                                                                          action="{{ route('payment_checkout',$payment->local_transaction_id) }}"
                                                                          method="post" class="stripe-payment"
                                                                          data-cc-on-file="false"
                                                                          data-stripe-publishable-key="{{ get_stripe_key('publishable') }}"
                                                                          id="stripe-payment">
                                                                        @csrf

                                                                        <div class='form-row row'>
                                                                            <div class='col-xs-12 card required'>
                                                                                <label class='control-label'>Card
                                                                                    Numéro de Téléphone</label>
                                                                                <input autocomplete='off'
                                                                                       class='form-control card-num'
                                                                                       size='20' type='text'>
                                                                            </div>
                                                                            <div
                                                                                class='col-xs-12 col-md-4 form-group cvc required'>
                                                                                <label class='control-label'>CVC</label>
                                                                                <input autocomplete='off'
                                                                                       class='form-control card-cvc'
                                                                                       placeholder='e.g 595' size='4'
                                                                                       type='text'>
                                                                            </div>
                                                                            <div
                                                                                class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                <label class='control-label'>Mois
                                                                                    D'expiration</label>
                                                                                <input
                                                                                    class='form-control card-expiry-month'
                                                                                    placeholder='MM' size='2'
                                                                                    type='text'>
                                                                            </div>
                                                                            <div
                                                                                class='col-xs-12 col-md-4 form-group expiration required'>
                                                                                <label class='control-label'>Année
                                                                                    d'expiration</label>
                                                                                <input
                                                                                    class='form-control card-expiry-year'
                                                                                    placeholder='YYYY' size='4'
                                                                                    type='text'>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-row row">
                                                                            <div
                                                                                class="col-md-12 hide error form-group">
                                                                                <div
                                                                                    class="alert-danger alert  stripe-error-message">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <button
                                                                                class="btn btn-success btn-lg btn-block"
                                                                                type="submit">Payer
                                                                            </button>
                                                                        </div>

                                                                    </form>

                                                                @elseif($payment->payment_method == 'paypal')
                                                                    <form
                                                                        action="{{route('submit_paypal_payment', [$payment->local_transaction_id])}}"
                                                                        method="post">
                                                                        @csrf
                                                                        <button type="submit"
                                                                                class="btn btn-primary float-right"><i
                                                                                class="fa fa-paypal"></i>
                                                                            Valider le payement 
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('css')
    <style>
        .hide {
            display: none;
        }
    </style>
@endsection
@section('js')
    @if($payment->payment_method == 'stripe')
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            $(function () {

                'use strict'

                var $form = $(".stripe-payment");
                $('form.stripe-payment').bind('submit', function (e) {
                    var $form = $(".stripe-payment"),
                        inputVal = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'
                        ].join(', '),
                        $inputs = $form.find('.required').find(inputVal),
                        $errorStatus = $form.find('div.error'),
                        valid = true;
                    $errorStatus.addClass('hide');

                    $('.has-error').removeClass('has-error');
                    $inputs.each(function (i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorStatus.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-num').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month').val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeRes);
                    }

                });

                function stripeRes(status, response) {
                    if (response.error) {
                        console.log(response.error.message);
                        $(".error").removeClass('hide')
                        $('.stripe-error-message')
                            .removeClass('hide')
                            .css("display", "block")
                            .text(response.error.message).fadeOut(4000);
                    } else {
                        var token = response['id'];
                        $form.find('input[type=text]').empty();
                        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                        $form.get(0).submit();
                    }
                }

            });

        </script>
    @endif
@endsection
