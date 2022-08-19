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
                    <h3 class="card-title mt-1">{{$title}}</h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>Titre de l'annonce</th>
                            <td> @if($payment->ads){{ $payment->ads->title }} @endif</td>
                        </tr>
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <td>@if($payment->user){{ $payment->user->full_name }} @endif</td>
                        </tr>


                        <tr>
                            <th>Montant payé</th>
                            <td>{{ $payment->amount }}</td>
                        </tr>
                        <tr>
                            <th>Mode de paiement</th>
                            <td>{{ ucfirst($payment->payment_method) }}</td>
                        </tr>
                        <tr>
                            <th>Statut de paiement</th>
                            <td>{{ $payment->status }}</td>
                        </tr>
                        <tr>
                            <th>Monnaie de paiement</th>
                            <td>{{ $payment->currency }}</td>
                        </tr>
                        <tr>
                            <th>Identifiant/jeton de facturation</th>
                            <td>{{ ucfirst($payment->status) }}</td>
                        </tr>
                        <tr>
                            <th>Payer Email</th>
                            <td>{{ $payment->payer_email }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $payment->description }}</td>
                        </tr>
                        <tr>
                            <th>Transaction ID</th>
                            <td>{{ $payment->local_transaction_id }}</td>
                        </tr>
                        <tr>
                            <th>Paiement effectué à</th>
                            <td>{{ $payment->payment_completed_at() }}</td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>


@stop

@section('script')

@stop
