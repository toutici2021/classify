@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
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
                    @if($payments->count())
                        <table class="table table-bordered data-table">

                            <thead>
                            <tr style="text-align: left">
                                <th>Annonces</th>
                                <th width="13%">Utilisateur</th>
                                <th>Amount</th>
                                <th width="13%">Mode de paiement</th>
                                <th>Status</th>
                                <th>Créé à</th>
                            </tr>
                            </thead>
                            @foreach($payments as $payment)
                                <tbody>
                                <tr>
                                    <td>
                                        @if($payment->ads)
                                            <a href="#"
                                               target="_blank">{{$payment->ads->title}}
                                            </a>
                                        @else
                                        Annonce supprimée
                                        @endif
                                    </td>
                                    <td>
                                        @if($payment->user)
                                            <a href="#"
                                               target="_blank"> {{$payment->user->fullName}}</a>
                                        @else
                                        Deleted user
                                        @endif
                                    </td>
                                    <td>{{$payment->amount}} {{get_option('currency_sign')}}</td>
                                    <td>{{ucfirst($payment->payment_method)}}</td>
                                    <td><a href="{{route('payment_info',$payment->local_transaction_id)}}"
                                           target="_blank">{{ucfirst($payment->status)}}</a></td>
                                    <td>{{$payment->created_at_datetime()}}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>

                    @else
                        <div class="alert alert-info">
                            Aucune donnée de paiement
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@stop

@section('script')

@stop
