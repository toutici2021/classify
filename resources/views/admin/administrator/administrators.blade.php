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
                    <h3 class="card-title title-adjustment">{{$title}}</h3>
                    <a class="btn btn-danger float-right" href="{{route('add_administrator')}}"><i
                            class="fa fa-user-plus"></i> Ajouter administrateur
                    </a>

                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Dernière connexion</th>
                            <th>Adresse IP</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($users as $admin)
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->last_login ? $admin->last_login_datetime() :'Not logged yet' }}</td>
                                <td>{{$admin->last_login_ip}}</td>
                                <td>

                                    @if($admin->id >2)

                                        <a href="javascript:void (0);" class="btn btn-success btn-sm {{ $admin->active_status ==1 ? '': 'display-none' }}  blockAdministrator"
                                           data-id="{{ $admin->id }}" ><i
                                                class="fa fa-unlock"></i> Débloquer</a>
                                        <a href="javascript:void (0);" class="btn btn-danger btn-sm {{ $admin->active_status ==1 ? 'display-none': '' }} unblockAdministrator"
                                           data-id="{{ $admin->id }}" ><i
                                                class="fa fa-lock"></i> Bloquer</a>

                                        <a href="javascript:void(0);"
                                           class="btn btn-danger btn-sm delete-user"
                                           data-id="{{ $admin->id }}"
                                           data-name="{{ $admin->full_name }}"><i
                                                class="fa fa-trash"></i> </a>

                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script src="{{asset('assets/dist/js/partial/user.js')}}"></script>
@stop
