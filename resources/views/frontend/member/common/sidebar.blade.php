<div class="user-info border-bottom border-brand-secondary border-2px p-4">
    @if(auth::user()->photo)
        <div class="user-img-box mx-auto mb-4">
            <img src="{{asset(auth::user()->photo)}}" class="img-circle p-2">
        </div>
    @endif
    <div>
        <h6 class="font-weight-strong text-dark text-center">{{auth::user()->full_name}}</h6>
    </div>
</div>

<div class="aside-user-nav p-3">
    <ul class="list-unstyled m-0 aside-user-menu">
        <li class="nav-item {{$menu == 'dashboard' ? 'active' : ''}} ">
            <a href="{{route('memberDashboard')}}" class="aside-user-link"><i class="fa fa-dashboard mr-1"></i>
                @lang('default.dashboard')</a>
        </li>
        <li class="nav-item {{$menu == 'manage_ads' ? 'active' : ''}} ">
            <a href="{{route('memberAds')}}" class="aside-user-link"><i class="fa fa-shopping-basket mr-1"></i> Mes annonces</a>
        </li>
        <li class="nav-item {{$menu == 'create_ad' ? 'active' : ''}}">
            <a href="{{route('memberCreateAds')}}" class="aside-user-link"><i class="fa fa-plus mr-1"></i> Publier une annonce</a>
        </li>
        <li class="nav-item {{$menu == 'published_ads' ? 'active' : ''}} ">
            <a href="{{route('memberPublishedAds')}}" class="aside-user-link"><i class="fa fa-eye mr-1"></i> Annonces publiées</a>
        </li>
        <li class="nav-item {{$menu == 'favourite_ads' ? 'active' : ''}} ">
            <a href="{{route('memberFavouriteAds')}}" class="aside-user-link"><i class="fa fa-heart-o mr-1"></i>
                Favourite ads</a>
        </li>
        <li class="nav-item {{$menu == 'pending_ads' ? 'active' : ''}} ">
            <a href="{{route('memberPendingAds')}}" class="aside-user-link"><i class="fa fa-angle-right mr-1"></i>
                Annonces en attente</a>
        </li>
        <li class="nav-item {{$menu == 'archived_ads' ? 'active' : ''}} ">
            <a href="{{route('memberArchivedAds')}}" class="aside-user-link"><i class="fa fa-lock mr-1"></i> Annonces archivées</a>
        </li>
        <li class="nav-item {{$menu == 'inquiry' ? 'active' : ''}} ">
            <a href="{{route('memberInquiry')}}"
               class="aside-user-link d-flex justify-content-between align-items-center">
                <span><i class="fa fa-envelope mr-1"></i> Message</span>
                <span class="rounded-circle border box-30"><span class="text"> {{numberOfInboxMessage()}}</span></span>
            </a>
        </li>
        <li class="nav-item {{$menu == 'payment' ? 'active' : ''}} ">
            <a href="{{route('memberPayment')}}" class="aside-user-link"><i class="fa fa-credit-card mr-1"></i> historique de paiement</a>
        </li>
        <li class="nav-item {{$menu == 'profile' ? 'active' : ''}} ">
            <a href="{{route('memberProfile')}}" class="aside-user-link"><i class="fa fa-user mr-1"></i> Mon profil</a>
        </li>
        <li class="nav-item {{$menu == 'edit_profile' ? 'active' : ''}}">
            <a href="{{route('memberEditProfile')}}" class="aside-user-link"><i class="fa fa-user-secret mr-1"></i>
                Mettre à jour le profil</a>
        </li>

        <li class="nav-item {{$menu == 'change_password' ? 'active' : ''}}">
            <a href="{{route('memberChangePassword')}}" class="aside-user-link"><i class="fa fa-lock mr-1"></i>
                Change Password</a>
        </li>

        <li class="nav-item">
            <a href="{{route('logout')}}" class="aside-user-link"><i class="fa fa-sign-out mr-1"></i> Se déconnecter</a>
        </li>
    </ul>
</div>
