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
                    <h3 class="card-title" >{{$title}}</h3>
                    <a href="{{route('create_new_database_backup')}}" class="btn btn-danger float-right"><i
                            class="fa fa-database"></i> Créer une nouvelle sauvegarde
                    </a>
                </div>
                <div class="card-body">
                    <table class="brand-data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Sauvegarde prise à</th>
                            <th>Action</th>
                        </tr>

                        @foreach($backups as $file)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$file->file_name}}</td>
                                <td>{{$file->created_at->diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm delete-backup"
                                       data-name="{{$file->file_name}}"
                                       data-id="{{$file->id}}"
                                       href="#"><i class="fa fa-trash-alt"></i> Effacer</a>
                                    <a class="btn btn-primary btn-sm" href="{{route('download_database',$file->id)}}"><i
                                            class="fa fa-download"></i> Télécharger</a>
                                </td>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/backup-database.js')}}"></script>
@stop
