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

                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Inscrit à</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{route('user_details',$user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at ? $user->signed_up_datetime() : 'No date found'}}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm blockUser {{ $user->active_status ==1 ? '': 'display-none' }} "
                                       data-id="{{ $user->id }}"><i
                                            class="fa fa-unlock"></i> Ouvrir</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm unBlockUser {{ $user->active_status ==1? 'display-none': '' }} "
                                       data-id="{{ $user->id }}"
                                       ><i
                                            class="fa fa-lock"></i> Bloquer</a>

                                    <a href="javascript:void(0);"
                                       class="btn btn-danger btn-sm delete-user"
                                       data-id="{{ $user->id }}"
                                       data-name="{{ $user->full_name }}"><i
                                            class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{asset('assets/dist/js/partial/user.js')}}"></script>
@stop
