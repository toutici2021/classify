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

    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title" style="margin-top: 7px;">{{$title}}</h3>
            <a href="{{route('paymentExport')}}" class="btn btn-danger float-right"><i class="fas fa-download"></i>
                Télécharger le rapport de paiement</a>
        </div>
        <div class="card-body">
            <form action="{{route('payment_report_filtered')}}" method="get">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label><strong>Année</strong></label>
                            <select class="form-control select2" name="year">
                                @for($year =2018; $year <= $currentYear; $year++)
                                    <option value="{{$year}}"
                                            @if(isset($selectedYear) && $selectedYear == $year) selected
                                            @else @if($year == $currentYear) selected @endif @endif >{{$year}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-danger float-right"><i class="fa fa-magic"></i> Filter Result </button>
                        </div>
                    </div>

                </div>
            </form>

            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$totalAds}}</h3>
                            <p>Pas d'annonces</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$totalIncome  . ' '. get_option('currency_sign')}}</h3>
                            <p>Revenue</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <canvas id="bar-chart" width="800" height="210"></canvas>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered data-table">

                        <thead>
                        <tr>
                            <th>Titre de l'annonce</th>
                            <th width="13%">Utilisateur</th>
                            <th>Le montant payé</th>
                            <th width="15%">Mode de paiement</th>
                            <th>Date de paiement</th>
                        </tr>
                        </thead>
                        @foreach($payments as $payment)
                            <tbody>
                            <tr>
                                <td>
                                    @if($payment->ads)
                                        {{$payment->ads->title}}
                                    @else
                                    Annonce supprimée
                                    @endif
                                </td>
                                <td>
                                    @if($payment->user)
                                        {{$payment->user->fullName}}
                                    @else
                                    Utilisateur supprimé
                                    @endif
                                </td>
                                <td>{{$payment->amount}} {{get_option('currency_sign')}}</td>
                                <td>  @if($payment->payment_method == 'stripe') <span
                                        class="badge badge-danger">Stripe</span>
                                    @else
                                        <span class="badge badge-info">PayPal</span>
                                    @endif
                                </td>
                                <td>{{$payment->created_at_datetime()}}</td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/payment-report.js')}}"></script>
@stop
