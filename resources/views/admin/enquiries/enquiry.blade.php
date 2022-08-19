@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
@stop

@section('content')

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Soumis à</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->created_at_datetime()}}</td>
                                <td>
                                    <button data-email="{{$message->email}}" type="button"
                                            class="btn btn-danger btn-sm float-right enquiry-reply"
                                            data-target="#enquiry-reply-modal" data-toggle="modal">
                                        <i class="fa fa-envelope-open-text"></i> Reply Enquiry
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('admin.email.enquiry.modal.reply-modal')
        </div>
    </div>
@endsection

@section('script')

    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/partial/contact-inquiry.js')}}"></script>

@endsection
