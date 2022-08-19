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
                <form action="{{route('updatePassword')}}" method="post">
                    @csrf
                    <div class="card-body">

                        <table class="city-data-table table table-bordered table-hover">
                            <tr>
                                <th>Nom</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Genre</th>
                                <td>{{ ucfirst($user->gender) }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $user->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <th>Pays</th>
                                <td>
                                    @if($user->country)
                                        {{ $user->country->country_name }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Site web</th>
                                <td>{{ $user->website }}</td>
                            </tr>
                            <tr>
                                <th>Inscrit à</th>
                                <td>{{$user->joinedDateTime()}}</td>
                            </tr>
                            <tr>
                                <th>@lang('default.status')</th>
                                <td>{{ $user->user_status() }}</td>
                            </tr>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
@stop
