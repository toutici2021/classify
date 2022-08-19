@extends('frontend.web-master')
@section('content')
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </nav>
    <main class="main-body">
        <section class="py-4 pb-lg-5">
            <!--============== Banner ===================-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h3 class="mb-4">Contactez-nous</h3>
                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <div class="box-40 rounded-circle border">
                                        <i class="fa fa-map-marker text-brand-secondary"></i>
                                    </div>
                                </div>
                                <div>
                                    <address class="mt-1 p-0">
                                        {{strip_tags(get_option('site_address'))}}
                                    </address>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <div class="box-40 rounded-circle border">
                                        <i class="fa fa-phone text-brand-secondary"></i>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">Appelez-nous</small>
                                    <span class="d-block">{{get_option('site_phone_number')}} </span>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="mr-3">
                                    <div class="box-40 rounded-circle border">
                                        <i class="fa fa-envelope text-brand-secondary"></i>
                                    </div>
                                </div>
                                <div>
                                    <small class="text-muted">Email</small>
                                    <span class="d-block"><a class="text-brand-secondary"
                                                             href="mailto:{{env('MAIL_FROM_ADDRESS')}}">{{env('MAIL_FROM_ADDRESS')}}</a></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="user-card bg-white rounded border">
                            <div class="user-card-body user-form-alt p-4">
                                <div class="mb-4">
                                    <h4>Quelle que soit votre demande, utilisez le formulaire de contact ci-dessous pour nous contacter - notre équipe est
                                        prêt à vous aider 24h/24 et 7j/7</h4>
                                </div>
                                <form action="{{route('sendContactUsInfo')}}" method="post">
                                    @csrf
                                    @if(session('message'))
                                        <div class="alert alert-danger">{{session('message')}}</div>
                                    @endif

                                    <div class="form-group user-form-group-alt">
                                        <label class="user-form-label-alt" for="name">'Nom'</label>
                                        <input type="text" name="name" id="name" class="user-form-input-alt"
                                               placeholder="nom" aria-label="input">
                                        @if ($errors->has('name'))
                                            <span class="error"> {{ $errors->first('name') }} </span>
                                        @endif
                                    </div>

                                    <div class="form-group user-form-group-alt">
                                        <label class="user-form-label-alt" for="email">Email </label>
                                        <input name="email" id="email" type="email"
                                               class="user-form-input-alt" placeholder="Email "
                                               aria-label="input">
                                        @if ($errors->has('email'))
                                            <span class="error"> {{ $errors->first('email') }} </span>
                                        @endif
                                    </div>

                                    <div class="form-group user-form-group-alt">
                                        <textarea name="message" id="message"
                                                  class="user-form-input-alt pt-2" placeholder="Message"
                                                  aria-label="textarea"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="error">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>


                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" class="btn btn-brand-primary py-2 px-4"><i
                                                class="fa fa-paper-plane-o mr-1"></i> Envoyez
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if(get_option('enable_monetize') == 1 && get_option('contact_us_bottom_of_page_content'))
            <section class="bg-theme-light py-2 py-lg-5 mb-5">
                <div class="container custom-container">
                    <div class="row small-gutters">
                        <div class="col-md-12 my-2 my-md-0">
                            {!! get_option('contact_us_bottom_of_page_content')  !!}
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </main>
@endsection
