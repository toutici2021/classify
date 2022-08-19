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
                    @if(count($reported_ads) > 0)
                        <table class="table table-bordered table-striped data-table">

                            <thead>
                            <tr>
                                <th>Raison</th>
                                <th>Reporters Email</th>
                                <th>Message</th>
                                <th>Signalé le</th>
                                <th>Informations sur les annonces</th>
                                <th>Nombre de rapports</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reported_ads as $report)
                                <tr>
                                    <td>{{ ucfirst($report->reason) }}</td>
                                    <td> {{ $report->email }}  </td>
                                    <td>
                                        {{ $report->message }}
                                    </td>
                                    <td>
                                        {{ $report->posting_datetime() }}
                                    </td>
                                    @if($report->advertise)
                                        <td>
                                            <a class="btn btn-info btn-sm" target="_blank"
                                               href="{{route('rootPath', [$report->advertise->slug])}}">Voir
                                               Les Annonces</a><br>
                                        </td>
                                        <td>
                                            {{ $report->advertise->reports->count() }}
                                        </td>
                                    @endif


                                    <td>
                                        <a href="javascript:;" class="btn btn-danger deleteReport"
                                           data-id="{{ $report->id }}"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')

    <script src="{{asset('assets/dist/js/partial/delete-ad-report.js')}}"></script>
@stop
