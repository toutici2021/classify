@extends('frontend.member-master')
@section('content')
    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            @include('frontend.member.common.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content nicescroll">
                            <div class="user-theme-block">
                                <div class="px-2 mb-3">
                                    <div class="row small-gutters">

                                        <div class="col-md-6 col-md-4 col-xl-3 mb-3">
                                            <div class="theme-block wiz-card bg-brand-fourth">
                                                <div class="px-4 pt-5 pb-3">
                                                    <h6 class="text-white">Annonces publiées</h6>
                                                    <h1 class="wiz-card-count">{{$number_of_published_ads}}</h1>
                                                </div>
                                                <a href="{{route('memberPublishedAds')}}" class="d-block bg-transparent-2 text-right text-white px-3 py-2">Gérer <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-md-4 col-xl-3 mb-3">
                                            <div class="theme-block wiz-card bg-brand-tertiary">
                                                <div class="px-4 pt-5 pb-3">
                                                    <h6 class="text-white">Annonces en attente</h6>
                                                    <h1 class="wiz-card-count">{{$number_of_pending_ads}}</h1>
                                                </div>
                                                <a href="{{route('memberPendingAds')}}" class="d-block bg-transparent-2 text-right text-white px-3 py-2">Gérer <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-md-4 col-xl-3 mb-3">
                                            <div class="theme-block wiz-card bg-brand-secondary">
                                                <div class="px-4 pt-5 pb-3">
                                                    <h6 class="text-white">Annonces archivées</h6>
                                                    <h1 class="wiz-card-count">{{$number_of_archive_ads}}</h1>
                                                </div>
                                                <a href="{{route('memberArchivedAds')}}" class="d-block bg-transparent-2 text-right text-white px-3 py-2">Gérer <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-md-4 col-xl-3 mb-3">
                                            <div class="theme-block wiz-card bg-brand-primary">
                                                <div class="px-4 pt-5 pb-3">
                                                    <h6 class="text-white">Paiements</h6>
                                                    <h1 class="wiz-card-count">{{$number_of_paid_ads}}</h1>
                                                </div>
                                                <a href="#" class="d-block bg-transparent-2 text-right text-white px-3 py-2">Gérer <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3>Derniers messages</h3>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th  width="40%">Expéditeur</th>
                                        <th width="40%">Message</th>
                                        <th class="text-center" width="20%">Action</th>
                                    </tr>
                                    @foreach($inquiries as $inquiry)
                                    <tr>
                                        <td>
                                            <i class="fa fa-user"></i> {{$inquiry->userFrom->full_name}} <br>
                                            <i class="fa fa-envelope-o"></i> {{$inquiry->userFrom->email}} <br>
                                            <i class="fa fa-clock-o"></i> {{$inquiry->created_at->diffForhumans()}}
                                        </td>
                                        <td>
                                            <h6 class="text-strong text-16">{{$inquiry->subject}}</h6>
                                            <div class="text-muted text-14">{{$inquiry->message}}</div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('memberInquiry', [$inquiry->id])}}" class="btn btn-brand-secondary btn-sm"> <i class="fa fa-send-o"></i> Send Reply</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('css')
@endsection
@section('js')
@endsection


