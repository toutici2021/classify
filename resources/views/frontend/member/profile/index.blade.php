@extends('frontend.member-master')
@section('content')
    <main class="main-body">
        <div class="container custom-container my-3 my-lg-4">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="panel-aside user-panel-aside">
                        <div class="aside-content">
                            <!--============= Aside ============-->
                            @include('frontend.member.common.sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="panel-body user-panel-body">
                        <div class="body-content">
                            <div class="user-theme-block">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div class="box-ratio box-ratio-1by1 border">
                                                <div class="box-ratio-content">
                                                    <img src="{{asset(auth::user()->photo)}}" class="img-fit-center p-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 align-self-end">
                                            <div>
                                                <h6 class="mb-3">{{auth::user()->full_name}}</h6>
                                                <a href="{{route('memberEditProfile')}}" class="btn rounded-0 btn-brand-secondary px-4 px-lg-5">Mettre à jour le profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered summery-table">
                                        <tbody>
                                        <tr>
                                            <td>Annonces Totales :</td>
                                            <td>{{auth::user()->ads->count()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Annnonces Publiées :</td>
                                            <td>{{auth::user()->publishedAds->count()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Annonces en attentes :</td>
                                            <td>{{auth::user()->pendingAds->count()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Annonces archivées :</td>
                                            <td>{{auth::user()->archivedAds->count()}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mb-4">
                                    <h6 class="text-brand-secondary mb-4 font-weight-strong">Details du contact</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex align-items-center">
                                            <span class="mr-3">
                                                <span class="box-30 rounded-circle bg-theme-light">
                                                    <i class="fa fa-map-marker text-13 text-brand-secondary"></i>
                                                </span>
                                            </span>
                                            <span class="text-15 text-muted">{{auth::user()->address}}</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-center">
                                        <span class="mr-3">
                                            <span class="box-30 rounded-circle bg-theme-light">
                                                <i class="fa fa-phone text-13 text-brand-secondary"></i>
                                            </span>
                                        </span>
                                            <span class="text-15 text-muted">{{auth::user()->phone}}</span>
                                        </li>
                                        <li class="mb-3 d-flex align-items-center">
                                        <span class="mr-3">
                                            <span class="box-30 rounded-circle bg-theme-light">
                                                <i class="fa fa-envelope text-13 text-brand-secondary"></i>
                                            </span>
                                        </span>
                                            <span class="text-15 text-muted">{{auth::user()->email}}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mb-4">
                                    <h6 class="text-brand-secondary mb-3 font-weight-strong">Description</h6>

                                    <p class="text-muted">{{auth::user()->description}} </p>
                                </div>
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
