@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form method="post" id="verify_purchase_code">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="purchase_code">Saisissez le code d'achat de votre produit </label>
                                <input type="text" class="form-control" name="purchase_code" id="purchase_code"
                                       placeholder="promo code">
                            </div>
                            <div class="form-group">
                                <label for="user_name">Entrez votre nom d'utilisateur</label>
                                <input type="text" class="form-control" name="user_name" id="user_name"
                                       placeholder="Nom d'utilisateur">
                            </div>
                            <p id="validating" style="display: none">Validating License....</p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger float-right" id="purchase_button">Vérifier
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')


    <script>

        $(function () {

            'use strict'
            $("#verify_purchase_code").on('submit', function (e) {
                e.preventDefault();
                const this_btn = $("#purchase_button");
                this_btn.attr('disabled', 'disabled');
                $("#validating").css({
                    'display': 'block'
                });

                $("#item_id").text('Loading...');
                $("#item_name").text('Loading...');
                $("#buyer").text('Loading...');
                $("#license").text('Loading...');
                $("#sold_at").text('Loading...');
                $("#supported_until").text('Loading...');

                $.ajax({
                    type: 'post',
                    data: $(this).serialize(),
                    url: "{{route('activate')}}",
                    success: function (response) {
                        if (response.success === 1) {
                            $(location).attr('href', site_url + '/dashboard');
                            this_btn.removeAttr('disabled');
                            $("#validating").removeClass('response-error').addClass('response-success').text(response.message);
                            toastr["success"](response.message);
                        } else {
                            this_btn.removeAttr('disabled');
                            $("#validating").removeClass('response-success').addClass('response-error').text(response.message);
                            toastr["error"](response.message);
                        }
                    },


                });
            });
        });
    </script>

@endsection
