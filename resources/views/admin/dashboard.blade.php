@extends('master')
@section('title')
    {{$title}}
@stop
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$active_ads}}</h3>
                    <p>{{__('default.active_ads')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>150</h3>
                    <p>{{__('default.dashboard_new_ads')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$users}}</h3>
                    <p>{{__('default.total_users')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$income_this_month}} {{get_option('currency_sign')}}</h3>
                    <p>{{__('default.total_income_in_this_month')}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    <canvas id="line-chart" width="800" height="220"></canvas>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h6><strong>{{strtoupper(__('default.most_visited_ads'))}}</strong></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="6%">{{__('default.most_visited_image')}}</th>
                            <th>{{__('default.most_visited_title')}}</th>
                            <th>{{__('default.most_visited_published_at')}}</th>
                            <th>{{__('default.most_visited_expire_in')}}</th>
                            <th>{{__('default.most_visited_views')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <td>
                                    @if($ad->image)
                                        <img width="100%" src="{{asset(ad_thumb($ad->image->media_name))}}"
                                             class="img-thumbnail">
                                    @endif
                                </td>
                                <td>{{$ad->title}}</td>
                                <td><span class="badge bg-primary">{{$ad->postingDateTime()}}</span></td>
                                <td><span class="badge bg-danger">{{$ad->postingDateTime()}}</span></td>
                                <td>{{$ad->view}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                    <a href="{{route('approved_ads')}}" class="btn btn-danger btn-sm float-right"><i
                            class="fa fa-eye"></i>
                        {{__('default.dashboard_view_all_ads')}}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h6><strong>{{strtoupper('Les 5 derniers messages de contact')}}</strong></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Expéditeur</th>
                            <th>Message</th>
                        </tr>
                        @foreach($five_contact_messages as $message)
                            <tr>
                                <td>
                                    <i class="fa fa-user"></i> {{ $message->name }} <br/>
                                    <i class="fa fa-envelope"></i> {{ $message->email }} <br/>
                                    <i class="fa fa-clock"></i> {{ $message->created_at->diffForHumans() }}
                                </td>
                                <td>{{ $message->message }}
                                    <button data-email="{{$message->email}}" type="button"
                                            class="btn btn-danger btn-sm enquiry-reply"
                                            data-target="#enquiry-reply-modal" data-toggle="modal">
                                        <i class="fa fa-envelope-open-text"></i> Réponse
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    <br>
                    <a href="{{route('contact_messages')}}" class="btn btn-danger btn-sm float-right"><i
                            class="fa fa-eye"></i> {{__('default.dashboard_view_all_messages')}}
                    </a>
                </div>

                @include('admin.email.enquiry.modal.reply-modal')
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/dashboard.js')}}"></script>
@endsection

