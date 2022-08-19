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
                        <div class="body-content nicescroll">
                            <div class="user-theme-block">
                                <div class="min-vh-75">
                                    <form method="post" id="verify_purchase_code">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="purchase_code">Entrez votre code promo </label>
                                                <input type="text" class="form-control" name="purchase_code" id="purchase_code"
                                                       placeholder="Purchase code">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_name">Entrez votre identifiant deals</label>
                                                <input type="text" class="form-control" name="user_name" id="user_name"
                                                       placeholder="User Name">
                                            </div>
                                            <p id="validating" style="display: none">Validation de la License....</p>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger float-right" id="purchase_button">Verifier
                                                </button>
                                            </div>
                                        </div>

                                    </form>
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

@endsection
@section('js')
    <script type="text/javascript">
        let site_url = "{{URL::to('/')}}";
    </script>
    <script>
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
                        this_btn.removeAttr('disabled');
                        $(location).attr('href', site_url+'/member/dashboard');
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
    </script>
@endsection
