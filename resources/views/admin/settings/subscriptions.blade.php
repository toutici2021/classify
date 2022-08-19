@extends('master')
@section('title')
    {{$title}}
@stop

@section('style')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('save_mailchimp_settings')}}" class="form-horizontal"
                          enctype="multipart/form-data"
                          method="post"> @csrf
                        <div class="form-group">
                            <label class="col-md-12 control-label">Activer/désactiver la newsletter Mailchimp
                                Abonnement </label>
                            <div class="col-md-8">
                                <label for="enable_disqus_comment_in_ads_detail" class="checkbox-inline">
                                    <input type="checkbox" value="1"
                                           id="enable_disqus_comment_in_ads_detail"
                                           name="mailchimp_subscription" {{ get_option('mailchimp_subscription') == 1 ? 'checked="checked"': '' }}>
                                           Activer l'abonnement Mailchimp dans le pied de page
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="facebook_url" class="col-sm-4 control-label">MAILCHIMP_APIKEY </label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-mailchimp"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="MAILCHIMP_APIKEY"
                                           value="{{ $_ENV['MAILCHIMP_APIKEY'] }}" name="MAILCHIMP_APIKEY"
                                           placeholder="MAILCHIMP_APIKEY">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="facebook_url" class="col-sm-4 control-label">MAILCHIMP_LIST_ID</label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fab fa-mailchimp"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="MAILCHIMP_LIST_ID"
                                           value="{{ $_ENV['MAILCHIMP_LIST_ID'] }}" name="MAILCHIMP_LIST_ID"
                                           placeholder="MAILCHIMP_LIST_ID">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" id="settings_save_btn" class="btn btn-danger float-right"><i
                                        class="fa fa-save"></i> Enregistrer les paramètres
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('assets/dist/js/partial/subscription-setting.js')}}"></script>
@stop
