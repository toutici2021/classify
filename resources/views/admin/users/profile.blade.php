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
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{__('default.user_name')}}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.full_name')}}</th>
                            <td>{{ $user->full_name }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.email')}}</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.gender')}}</th>
                            <td>{{ ucfirst($user->gender) }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.mobile')}}</th>
                            <td>{{ $user->mobile }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.phone')}}</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.address')}}</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.country')}}</th>
                            <td>
                                @if($user->country)
                                    {{ $user->country->country_name }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>{{__('default.website')}}</th>
                            <td>{{ $user->website }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.profile_created_at')}}</th>
                            <td>{{ $user->signed_up_datetime() }}</td>
                        </tr>
                        <tr>
                            <th>{{__('default.status')}}</th>
                            <td>{{ $user->user_status() }}</td>
                        </tr>
                    </table>

                    <hr>
                    <a class="btn btn-danger float-right" href="{{ route('edit-profile') }}"><i
                            class="fa fa-user-edit"></i> Modifier le profile </a>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')


@stop
