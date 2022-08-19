@extends('frontend.web-master')
@section('content')
    <nav aria-label="breadcrumb" class="container custom-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('rootPath')}}">@lang('default.home')</a></li>
            <li class="breadcrumb-item"><a href="{{route('adsListing')}}">Liste d'annonces</a></li>
            <li class="breadcrumb-item active"
                aria-current="page">{{\Illuminate\Support\Str::words($ad->title, 15)}}</li>
        </ol>
    </nav>
    <main class="main-body">


        <section class="my-4">
            <div class="container custom-container">

                <div class="row">
                    <div class="col-lg-4 col-xl-3 order-2 order-lg-0">
                    @include('frontend.commom.ad-filter')

                    @if(get_option('enable_monetize') == 1 && get_option('ad_details_page_bottom_of_left_side_bar'))
                        <div class="ads my-4">
                            {!! get_option('ad_details_page_bottom_of_left_side_bar') !!}
                        </div>
                    @endif

                    <!--========== Google Ad ===========-->
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <!--=========== Main Information / Details ==============-->
                        <div class="mb-4">
                            <!--=========== Title ================-->
                            <div class="row">
                                <div class="col-lg-8 mb-4 mb-lg-0">
                                    <h2 class="mb-4 text-28"> {{$ad->title}}</h2>
                                    @if($ad->media_img->count() > 0)
                                        <div class="product-details-img mb-4">
                                            @if($ad->feature_img)
                                                <div class="box-ratio box-ratio-1by1 mb-4">
                                                    <div class="primary-image" id="primaryImg">
                                                        <img
                                                            src="{{asset('public/uploads/ad/'.$ad->feature_img->media_name) }}">
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="secondary-img-box">
                                                <ul class="list-unstyled mb-0 secondary-img-list owl-carousel">
                                                    @foreach($ad->media_img as $adMedia)
                                                        <li class="secondary-img-item">
                                                            <div class="box-ratio box-ratio-1by1">
                                                                <div class="secondary-img img-thumbnail">
                                                                    <img
                                                                        src="{{asset('public/uploads/ad/'.$adMedia->media_name) }}">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                @endif
                                <!--========= Description ===============-->
                                    <div class="description mb-4">
                                        <h5 class="border-bottom after-border-bottom mb-3">Description</h5>

                                        {{ strip_tags($ad->description) }}

                                        @if($ad->video_url)
                                            <br><br>
                                            @php $value = substr($ad->video_url, 32); @endphp
                                            <h5 class="border-bottom after-border-bottom mb-3">Details en vidéos</h5>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="https://www.youtube.com/embed/{{$value}}"
                                                        class="embed-responsive-item" frameborder="0"
                                                        allowfullscreen></iframe>
                                            </div>
                                        @endif


                                    <!--  ========= Related Ads Block Starts ===============-->
                                        <br><br>
                                        @if($related_ads->count() > 0 && get_option('enable_related_ads') == 1)

                                            <h5 class="border-bottom after-border-bottom mb-3">Annonces associées</h5>

                                            <div class="owl-carousel related-ad-owl only-aside-nav">
                                                @foreach($related_ads as $r_ads)
                                                    <div>
                                                        <div class="product-item">
                                                            <div class="move-dir-box">
                                                                <span
                                                                    class="batch {{$r_ads->price_plan == 'regular' ? 'regular' : ''}}"> {{ucwords($r_ads->price_plan)}}</span>
                                                                <div class="product-img-box">
                                                                    <a href="{{route('rootPath', [$r_ads->slug])}}">
                                                                        <img
                                                                            src="{{$r_ads->image ? asset(ad_thumb($r_ads->image->media_name)) : ''}}"
                                                                            class="product-img" alt="Product Image">
                                                                    </a>


                                                                </div>
                                                                <div class="dh-overlay">
                                                                    <div class="dir-move-content">
                                                                        <div
                                                                            class="position-absolute w-100 center-x mt-0 category-price-holder">
                                                        <span
                                                            class="price  d-block text-center text-white text-14"> {{ get_option('currency_sign') }} {{$r_ads->price}} </span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--========== Overlay Link ==========-->
                                                                <a href="{{route('rootPath', [$r_ads->slug])}}"></a>
                                                            </div>
                                                            <div class="product-content">
                                                                @if($r_ads->category)
                                                                    <div class="mb-2 mt-3">
                                                                        <a href="{{route('categories', [$r_ads->category->category_slug])}}"
                                                                           class="font-weight-medium text-brand-fourth text-14">{{$r_ads->category->category_name}}</a>
                                                                    </div>
                                                            @endif
                                                            <!--====== Title ======-->
                                                                <a href="{{route('rootPath', [$r_ads->slug])}}"
                                                                   class="product-title text-brand-secondary"> {{\Illuminate\Support\Str::words($r_ads->title, 8)}} </a>
                                                            </div>
                                                            <div class="product-item-footer">
                                                                <div>
                                                                    @if($r_ads->user)
                                                                        <a href="{{route('sellerStore', [$r_ads->user->slug])}}"
                                                                           class="d-block text-brand-tertiary text-13 my-1"><i
                                                                                class="icofont-bag mr-1"></i>
                                                                            <span
                                                                                class="font-weight-medium"> {{$r_ads->user->full_name}} </span></a>
                                                                    @endif
                                                                    <span class="d-block text-13 my-1">
                                            <i class="icofont-google-map mr-1"></i> {{$r_ads->city ? $r_ads->city->city_name.',' : ''}} {{$r_ads->state ? $r_ads->state->state_name.',' : ''}} {{$r_ads->country ? $ad->country->country_name : ''}}
                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        @endif
                                    <!--  ========= Related Ads Block Ends ===============-->





                                        @if($enable_discuss)
                                            <br><br>
                                            <h5 class="border-bottom after-border-bottom mb-3"><i
                                                    class="fa fa-commenting-o"></i> Derniers Commentaires</h5>
                                            <div class="comment-box">
                                                <div id="disqus_thread"></div>
                                                <script>
                                                    var disqus_config = function () {
                                                        this.page.url = '{{route('rootPath', [$ad->slug])}}';  // Replace PAGE_URL with your page's canonical URL variable
                                                        this.page.identifier = '{{route('rootPath', [$ad->slug])}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                    };
                                                    (function () { // DON'T EDIT BELOW THIS LINE
                                                        var d = document, s = d.createElement('script');
                                                        s.src = '//{{get_option('disqus_shortname')}}.disqus.com/embed.js';
                                                        s.setAttribute('data-timestamp', +new Date());
                                                        (d.head || d.body).appendChild(s);
                                                    })();
                                                </script>
                                                <noscript>Veuillez activer JavaScript pour afficher le <a
                                                        href="https://disqus.com/?ref_noscript">commentaires propulsés par
                                                        Disqus.</a></noscript>
                                            </div>
                                        @endif


                                    </div>


                                </div>
                                <!--  ========= Product Main Information / Details Block ===============-->
                                <div class="col-lg-4">
                                    <div class="rounded p-3 mb-4 product-info-box">

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between px-0">
                                                <div class="font-weight-medium text-14 text-nowrap pr-3"><i
                                                        class="fa fa-money mr-2 text-brand-primary"></i>
                                                    <strong>Price</strong>
                                                </div>
                                                <div
                                                    class="text-bold text-14 text-brand-primary text-right font-weight-strong">{{ get_option('currency_sign') }} {{$ad->price}}</div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between px-0">
                                                <div class="font-weight-medium text-14 text-nowrap mr-3"><i
                                                        class="fa fa-clock-o mr-2 text-brand-primary"></i>
                                                    <strong>Conditions</strong>
                                                </div>
                                                <div
                                                    class="text-bold text-14 text-brand-primary text-right font-weight-strong">{{ucfirst($ad->ad_condition)}}</div>
                                            </li>
                                            @if($ad->country)
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <div
                                                        class=" font-weight-medium text-nowrap text-14 text-nowrap pr-3">
                                                        <i
                                                            class="fa fa-globe mr-2 text-brand-primary"></i> <strong>Emplacement</strong>
                                                    </div>
                                                    <div
                                                        class="text-muted text-right text-14">{{$ad->country->country_name}}</div>
                                                </li>
                                            @endif
                                            @if($ad->brand)
                                                <li class="list-group-item d-flex justify-content-between px-0">
                                                    <div
                                                        class=" font-weight-medium text-nowrap text-14 text-nowrap pr-3">
                                                        <i
                                                            class="fa fa-tag mr-2 text-brand-primary"></i> Marque
                                                    </div>
                                                    <div
                                                        class="text-muted text-right text-14">{{$ad->brand->brand_name}}</div>
                                                </li>
                                            @endif
                                        </ul>

                                    </div>

                                    @if($ad->user)
                                        <h6 class="mb-3 border-bottom after-border-bottom ">Contactez le vendeur</h6>

                                        <div class="d-flex  p-3 p-xl-4 border rounded mb-4">
                                            <div class="mr-3">
                                                <div class="box-50 rounded-circle">
                                                    <img src="{{asset($ad->user->photo)}}"
                                                         class="img-fit-center rounded-circle">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="{{route('sellerStore', [$ad->user->slug])}}"><h6
                                                        class="text-16"> {{$ad->user->full_name}} </h6></a>
                                                <small class="d-block text-muted"><i
                                                        class="icofont-google-map text-brand-secondary"></i> {{$ad->city ? $ad->city->city_name.',' : ''}} {{$ad->state ? $ad->state->state_name.',' : ''}} {{$ad->country ? $ad->country->country_name : ''}}
                                                </small>
                                                <time class="text-13 text-muted"><i
                                                        class="fa fa-clock-o text-brand-secondary"></i>
                                                    Joined: {{$ad->user ? $ad->user->joinedDateTime() : '' }} </time>
                                            </div>
                                        </div>
                                    @endif

                                    <ul class="list-unstyled btn-group-list">
                                        <li class="mb-3">
                                            <a href="javascript:void (0);" data-phone="{{$ad->seller_phone }}" id="onClickShowPhone"
                                               class="btn btn-block btn-brand-fourth">
                                                <i class="fa fa-phone"></i> Afficher le numéro de téléphone
                                            </a>


                                        </li>
                                        <li class="mb-3">
                                            @auth
                                                <a data-toggle="modal" href="#sendMessage"
                                                   class="btn btn-block btn-outline-brand-secondary"><i
                                                        class="fa fa-envelope"></i> Envoyer le message </a>
                                            @else
                                                <a href="#login" data-toggle="modal"
                                                   class="btn btn-block btn-outline-brand-secondary"><i
                                                        class="fa fa-envelope"></i> Envoyer le message </a>
                                            @endauth
                                        </li>
                                        <li class="mb-3">

                                            @auth
                                                <a href="javascript:void (0);" id="save_as_favorite"
                                                   data-slug="{{ $ad->slug }}"
                                                   class="btn btn-block   btn-lg text-16 {{$ad->is_my_favorite() ? 'btn-brand-secondary' : 'btn-outline-brand-secondary'}} ">
                                                    @if($ad->is_my_favorite())
                                                        <i class="fa fa-heart"></i>  Enregistré comme favori
                                                    @else
                                                        <i class="fa fa-heart-o"></i>  Enregistrer comme favori
                                                    @endif

                                                </a>
                                            @else
                                                <a href="#login" data-toggle="modal"
                                                   class="btn btn-block btn-lg text-16 btn-outline-brand-secondary"><i
                                                        class="fa fa-heart-o"></i> Enregistré comme favori </a>
                                            @endauth


                                        </li>
                                        <li>
                                            <a href="javascript:void (0);" data-toggle="modal"
                                               data-target="#reportAdModal" class="btn btn-block btn-brand-secondary">
                                                <i class="fa fa-ban"></i> Signaler cette annonce
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    @if(get_option('enable_monetize') == '1' && get_option('ad_details_below_latest_comments_section'))
                        <div class="my-4">
                            {!! get_option('ad_details_below_latest_comments_section') !!}
                        </div>

                    @endif


                </div>
            </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{route('loginFromModal')}}" method="POST" role="form" id="loginForm">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Identifiant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="login-fail"></div>
                            <div class="form-group">
                                <label for="email" class="control-label"> Email :</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Mot de passe:</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="{{route('memberStoreInquiry')}}" role="form">
                        @csrf
                        <input type="hidden" name="advertise_id" value="{{$ad->id}}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Envoyer le message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="subject" class="control-label">Sujet:</label>
                                <input type="text" class="form-control required" name="subject" id=subject" required
                                       placeholder="Sujet">
                            </div>

                            <div class="form-group">
                                <label for="message" class="control-label">Message :</label>
                                <textarea class="form-control" name="message" id="message" required
                                          placeholder="Votre message ici.." data-placement="top"
                                          data-trigger="manual"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Envoyer le message</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reportAdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="{{route('memberStoreInquiry')}}" role="form">
                        @csrf
                        <input type="hidden" name="advertise_id"  value="{{$ad->id}}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quelque chose ne va pas avec cette annonce?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <p>Nous travaillons constamment dur pour nous assurer que nos annonces répondent à des normes élevées et nous sommes très
                                reconnaissant pour
                                tout type de commentaires de nos utilisateurs.</p>
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Raison:</label>
                                    <select class="form-control" name="reason">
                                        <option value="">Sélectionnez une raison</option>
                                        <option value="unavailable">Objet non disponible</option>
                                        <option value="fraud">Fraude</option>
                                        <option value="duplicate">Dupliquer</option>
                                        <option value="spam">Spam</option>
                                        <option value="wrong_category">Mauvaise catégorie</option>
                                        <option value="offensive">Offensif</option>
                                        <option value="other">Autres</option>
                                    </select>

                                    <div id="reason_info"></div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">Email:</label>
                                    <input type="text" class="form-control" id="email" name="reporter_email">
                                    <div id="email_info"></div>

                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message" name="reporter_message"></textarea>
                                    <div id="message_info"></div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="report_ad">Signaler des annonces</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('public/frontend/js/partial/filter.js')}}"></script>
    <!--============== Plugin ======================-->
    <script type="text/javascript" src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>

    <script type="text/javascript" src="{{asset('public/frontend/js/partial/ad-details.js')}}"></script>
@endsection
