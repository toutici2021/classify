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
                                                <th>Détails de l'annonce</th>
                                                <th class="text-center">@lang('default.status')</th>
                                                <th class="text-center" width="15%">Prix</th>
                                                <th class="text-center">Option</th>
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

                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <small class="text-muted"><i class="fa fa-eye"></i>
                                                                    Visiteurs : <strong>{{$ad->view}}</strong> </small>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-muted">|</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <time class="text-13 text-muted"><i
                                                                        class="fa fa-clock-o"></i>
                                                                    Posté: {{$ad->postingDateTime()}}  </time>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="published"> @php echo $ad->adsStatus(); @endphp </small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="price d-block text-center"> {{ get_option('currency_sign') }} {{$ad->price}} </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="my-1">
                                                            <a href="{{route('memberEditAds', [$ad->id])}}"
                                                               class="btn btn-sm btn-block text-13 btn-primary"><i
                                                                    class="fa fa-edit mr-1"></i> @lang('default.edit')</a>
                                                        </div>
                                                        <div class="my-1">
                                                            <a href="javascript:void(0);" data-id="{{ $ad->id }}"
                                                               class="btn btn-sm btn-block text-13 btn-danger delete-ad"><i
                                                                    class="fa fa-trash-o mr-1"></i> @lang('default.delete')</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$ads->links("pagination::bootstrap-4")}}
                                @else
                                    <div class="min-vh-75">
                                        <h3 class="text-center pt-5">Ads Not Found</h3>
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
@section('css')

@endsection
@section('js')
    <script type="text/javascript" src="{{asset('public/member/js/partial/delete-ad.js')}}"></script>
@endsection
