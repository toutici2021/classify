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
                            <div class="user-theme-block min-vh-75">
                                @if($payments->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-bordered ad-table">
                                            <thead>
                                            <tr style="text-align: left">
                                                <th>Annonces</th>
                                                <th>Montant</th>
                                                <th>Methodes</th>
                                                <th>@lang('default.status')</th>
                                                <th>Payement en attente</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($payments as $payment)

                                                <tr>
                                                    <td class="embed-responsive-item" style="width:50%">
                                                        @if($payment->ads)
                                                            <a href="{{route('rootPath', [$payment->ads->slug])}}" target="_blank" class="product-title mb-2" > {{$payment->ads->title}} </a>
                                                        @else
                                                            Annonce a été suprimer par l'utilisateur
                                                        @endif
                                                    </td>
                                                    <td>{{$payment->amount}} {{get_option('currency_sign')}}</td>
                                                    <td>{{ucfirst($payment->payment_method)}}</td>
                                                    <td>{{ucfirst($payment->status)}}</td>
                                                    <td>{{$payment->created_at_datetime()}}</td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$payments->links("pagination::bootstrap-4")}}
                                @else
                                    <div class="min-vh-75">
                                        <h3 class="text-center pt-5">Pas de payement dans l'historique</h3>
                                    </div>
                                @endif
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

@endsection
