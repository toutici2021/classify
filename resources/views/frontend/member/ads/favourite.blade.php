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
                        <div class="body-content nicescroll">

                            <div class="user-theme-block">
                                @if($ads->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-bordered ad-table">
                                            <thead>
                                            <tr>
                                                <th>Photos</th>
                                                <th>Détails de l'annonces</th>
                                                <th class="text-center">Prix</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ads as $ad)
                                                <tr>
                                                    <td>
                                                        <div class="embed-responsive-1by1">
                                                            @if($ad->image)
                                                                @if($ad->status == '1')
                                                                    <a href="{{route('rootPath', [$ad->slug])}}"
                                                                       target="_blank" class="embed-responsive-item">
                                                                        <img
                                                                            src="{{asset(ad_thumb($ad->image->media_name))}}"
                                                                            class="img-fluid">
                                                                    </a>
                                                                @else
                                                                    <img
                                                                        src="{{asset(ad_thumb($ad->image->media_name))}}"
                                                                        class="img-fluid">
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>

                                                        @if($ad->status == '1')
                                                            <a href="{{route('rootPath', [$ad->slug])}}" target="_blank"
                                                               class="product-title mb-2"> {{$ad->title}} </a>
                                                        @else
                                                            {{$ad->title}}
                                                        @endif

                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="price d-block text-center"> {{ get_option('currency_sign') }} {{$ad->price}} </span>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$ads->links("pagination::bootstrap-4")}}
                                @else
                                    <div class="min-vh-75">
                                        <h3 class="text-center pt-5">Annonce pas trouvée</h3>
                                    </div>
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>


    </main>
@endsection

