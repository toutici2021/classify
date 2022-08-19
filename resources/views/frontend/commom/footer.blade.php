<footer class="footer bg-light-white">
    <div class="py-4 py-lg-5">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h6 class="text-uppercase border-bottom pb-2 mb-4">{{get_option('site_name')}}</h6>

                    <div class="mb-4">
                        <address>
                           {{strip_tags(get_option('site_address'))}}
                        </address>
                        <a href="#" class="d-block mb-2"><i class="fa fa-phone mr-2"></i>
                            {{get_option('site_phone_number')}}</a>
                        <a href="mailto:{{env('MAIL_FROM_ADDRESS')}}" class="d-block text-brand-secondary"><i
                                class="fa fa-envelope-o mr-2"></i>
                            {{env('MAIL_FROM_ADDRESS')}}</a>
                    </div>
                    <div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{get_option('facebook_url')}}" target="_blank" class="footer-social-item"><i
                                        class="fa fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{get_option('twitter_url')}}" target="_blank"
                                   class="footer-social-item"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{get_option('linked_in_url')}}" target="_blank"
                                   class="footer-social-item"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="pr-lg-4">
                        <h6 class="text-uppercase border-bottom pb-2 mb-4">Liens utiles</h6>

                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <a href="{{route('memberRegistration')}}" class="d-block">Créer un compte</a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('contactUs')}}" class="d-block">Contactez-nous</a>
                            </li>
                            @foreach($footerPages as $footerPage)
                                <li class="mb-3">
                                    <a href="{{route('dynamicPage', [$footerPage->slug])}}"
                                       class="d-block">{{$footerPage->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="pr-lg-4">
                        <h6 class="text-uppercase border-bottom pb-2 mb-4">Catégories populaires</h6>
                        <ul class="list-unstyled mb-0">
                            @foreach(get_popular_categories() as $key => $popular_category)
                                @if($key == 5)
                                    @break
                                @endif
                                <li class="mb-3">
                                    <a href="{{url('/categories/'.explode('+',$popular_category)[1])}}"
                                       class="d-block">{{explode('+',$popular_category)[0]}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                @if(get_option('mailchimp_subscription') == 1)
                    <div class="col-md-6 col-lg-3">
                        <div class="pr-lg-4">
                            <h6 class="text-uppercase border-bottom pb-2 mb-4">Newsletters</h6>
                            <p class="text-muted">Abonnez-vous à notre newsletter pour recevoir des mises à jour passionnantes</p>
                            <div class="mb-4">
                                <form id="email_subscription" method="post" action="{{route('subscribe')}}">
                                    @csrf
                                    <div class="input-group mb-3 footer-input">
                                        <div class="input-group-prepend">
                                        <span
                                            class="input-group-text text-white bg-brand-secondary border-brand-secondary border-3px"><i
                                                class="icofont-envelope"></i></span>
                                        </div>
                                        <input type="text" id="subscriber_email"
                                               class="form-control border-brand-secondary"
                                               placeholder="Email Address" aria-label="Email">
                                    </div>
                                    <button type="submit" class="btn btn-block btn-brand-secondary px-4 text-14"
                                            id="subscribe">S'abonner 
                                    </button>
                                    <p class="alert alert-danger mt-4 display-none" id="invalid_email"></p>
                                    <p class="alert alert-success mt-4 display-none" id="subscription_success"></p>
                                </form>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>
    <div class="py-3 footer-last">
        <div class="container custom-container">
            <h6 class="my-2 text-14 text-center">{{get_option('footer_copyright_text')}}
                <span class="text-brand-secondary"></span>
            </h6>
        </div>
    </div>
</footer>




