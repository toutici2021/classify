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
    <div class="loader loader-border" data-text="Publishing ads, please wait."></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title title-adjustment">{{$title}}</h3>
                    <a href="{{route('create_ads')}}" class="btn btn-danger float-right"><i
                            class="fab fa-buffer"></i> Créer de nouvelles annonces
                    </a>
                </div>
                <div class="card-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="8%">Image</th>
                            <th width="20%">Titre</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            
                            <th>Vendeur</th>
                            <th width="12%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td>
                                    @if($ad->image)
                                        <img src="{{asset(ad_thumb($ad->image->media_name))}}" class="img-thumbnail">
                                    @endif

                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            {{$ad->title}}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{$ad->category ? $ad->category->category_name : ''}}
                                    - {{$ad->subCategory ? $ad->subCategory->category_name : ''}}
                                </td>
                                <td>{{ get_option('currency_sign') }} {{$ad->price}}</td>
                                <td>{{$ad->seller_name}}</td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="Edit this ads"
                                       href="{{route('edit_ad', [$ad->id])}}" class="btn btn-danger btn-sm edit"><i
                                            class="fas fa-pen"></i> </a>
                                    @if($ad->status == '1')
                                        <a data-toggle="tooltip" data-placement="top" title="Block this ads"
                                           href="javascript:void (0);" class="btn btn-sm btn-danger blockAds"
                                           data-slug="{{ $ad->slug }}" data-value="2"><i class="fa fa-ban"></i> </a>
                                    @else
                                        <a data-toggle="tooltip" data-placement="top" title="Approve this ads"
                                           href="javascript:void (0);" class="btn btn-sm btn-danger approveAds"
                                           data-slug="{{ $ad->slug }}" data-value="1"><i
                                                class="fa fa-check-circle"></i> </a>
                                    @endif
                                    <a data-toggle="tooltip" data-placement="top" title="Delete this ads"
                                       href="javascript:void(0);" data-id="{{ $ad->id }}"
                                       class="btn btn-danger btn-sm delete-ad"><i class="fa fa-trash"></i> </a>
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
    <script src="{{asset('assets/dist/js/partial/ad-action.js')}}"></script>
@stop
