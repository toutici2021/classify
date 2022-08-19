<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('dashboard')}}" class="brand-link">
        <span class="brand-text font-weight-light">
          <img src="{{asset(get_option('logo'))}}" alt="Classify Logo" class="brand-image elevation-3"
               style="opacity: .8"></span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link @if($activeMenu == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>{{__('default.dashboard')}}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('adminCategory')}}"
                       class="nav-link @if($activeMenu == 'categories') active @endif">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>{{__('default.ads')}} {{__('default.categories')}}</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('brands')}}" class="nav-link @if($activeMenu == 'brands') active @endif">
                        <i class="nav-icon fab fa-first-order"></i>
                        <p>{{__('default.brands')}}</p>
                        <span class="right badge badge-danger">{{$totalBrands}}</span>
                    </a>
                </li>

                <li class="nav-item has-treeview @if($activeMenu == 'approved-ads'
                                                || $activeMenu == 'create-ads'
                                                || $activeMenu == 'reported-ads'
                                                || $activeMenu == 'premium-pending-ads'
                                                || $activeMenu == 'regular-pending-ads'
                                                || $activeMenu == 'blocked-ads') menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>{{__('default.ads')}}<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('create_ads')}}"
                               class="nav-link @if($activeMenu == 'create-ads') active @endif">
                                <p>{{__('default.post_an_ads')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('premium_pending_ads')}}"
                               class="nav-link @if($activeMenu == 'premium-pending-ads') active @endif">
                                <p>{{__('default.premium_pending')}}</p>
                                <span class="right badge badge-danger">{{$totalPremiumPendingAds}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('regular_pending_ads')}}"
                               class="nav-link @if($activeMenu == 'regular-pending-ads') active @endif">
                                <p>{{__('default.regular_pending')}}</p>
                                <span class="right badge badge-danger">{{$totalRegularPendingAds}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('approved_ads')}}"
                               class="nav-link @if($activeMenu == 'approved-ads') active @endif">
                                <p>{{__('default.approved')}}  {{__('default.ads')}}</p>
                                <span class="right badge badge-danger" id="approved-ads">{{$totalPublishedAds}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blocked_ads')}}"
                               class="nav-link @if($activeMenu == 'blocked-ads') active @endif">
                                <p>{{__('default.blocked')}} {{__('default.ads')}}</p>
                                <span class="right badge badge-danger" id="blocked-ads">{{$totalBlockedAds}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('all_reported_ads')}}"
                               class="nav-link @if($activeMenu == 'reported-ads') active @endif">
                                <span class="right badge badge-danger">{{$totalReportedAds}}</span>
                                <p>{{__('default.reported')}} {{__('default.ads')}}</p>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item has-treeview @if($activeMenu == 'content-pages') menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-bootstrap"></i>
                        <p>{{__('default.contents')}}<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pages')}}"
                               class="nav-link @if($activeMenu == 'content-pages') active @endif">
                                <p>{{__('default.pages')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('sliders')}}" class="nav-link @if($activeMenu == 'sliders') active @endif">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>{{__('default.home')}} {{__('default.page')}} {{__('default.slider')}}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users')}}" class="nav-link @if($activeMenu == 'list-users') active @endif">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>{{__('default.users')}} {{__('default.management')}}</p>
                        <span class="right badge badge-danger">{{$totalActiveUsers}}</span>
                    </a>
                </li>

                <li class="nav-item has-treeview @if($activeMenu == 'states' || $activeMenu == 'cities' || $activeMenu == 'country-setting') menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-location-arrow"></i>
                        <p>{{__('default.locations')}} <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('country_list')}}"
                               class="nav-link @if($activeMenu == 'country-setting') active @endif">
                                <p>{{__('default.countries')}}</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('states')}}" class="nav-link @if($activeMenu == 'states') active @endif">
                                <p>{{__('default.states')}}</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cities')}}" class="nav-link @if($activeMenu == 'cities') active @endif">
                                <p>{{__('default.cities')}}</p></a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview @if($activeMenu == 'payment-report' || $activeMenu == 'user-register-report') menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-chart-area"></i>
                        <p> Reports<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('payment_report')}}"
                               class="nav-link @if($activeMenu == 'payment-report') active @endif">
                                <p>{{__('default.payment')}}</p></a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{route('contact_messages')}}"
                       class="nav-link @if($activeMenu == 'contact-messages') active @endif">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>{{__('default.contact_enquiries')}}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('monetize')}}"
                       class="nav-link @if($activeMenu == 'monetize_your_site') active @endif">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>Monétisez votre site</p>
                    </a>
                </li>



                <li class="nav-item has-treeview @if($activeMenu == 'general-settings'
                                                                || $activeMenu == 'file-storage-settings'
                                                                || $activeMenu == 'payment-settings'
                                                                || $activeMenu == 'backup-database'
                                                                || $activeMenu == 'smtp-settings'
                                                                || $activeMenu == 'meta-management'
                                                                || $activeMenu == 'ads-settings'
                                                                || $activeMenu =='other-settings'
                                                                || $activeMenu == 'subscription-settings'
                                                                ||$activeMenu == 'social-url')

                    menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>{{__('default.settings')}}<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('general_settings')}}"
                               class="nav-link @if($activeMenu == 'general-settings') active @endif">
                                <p>{{__('default.general_settings')}} </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ad_settings')}}"
                               class="nav-link @if($activeMenu == 'ads-settings') active @endif">
                                <p>{{__('default.ads_settings_pricing')}}</p>
                            </a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a href="{{route('payment_settings')}}"
                               class="nav-link @if($activeMenu == 'payment-settings') active @endif">
                                <p>{{__('default.payment_settings')}}</p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="{{route('smtp_settings')}}"
                               class="nav-link @if($activeMenu == 'smtp-settings') active @endif">
                                <p>{{__('default.smtp_settings')}}</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{route('meta_management')}}"
                               class="nav-link @if($activeMenu == 'meta-management') active @endif">
                                <p>{{__('default.meta_management')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('other_settings')}}"
                               class="nav-link @if($activeMenu == 'other-settings') active @endif">
                                <p>{{__('default.other_settings')}}</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="{{route('subscription_settings')}}"
                               class="nav-link @if($activeMenu == 'subscription-settings') active @endif">
                                <p>Subscription Settings</p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="{{route('social_url')}}"
                               class="nav-link @if($activeMenu == 'social-url') active @endif">
                                <p>{{__('default.social_url')}}</p></a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('administrators')}}"
                       class="nav-link @if($activeMenu == 'administrators') active @endif">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>{{__('default.manage_administrator')}}</p>
                        <span class="right badge badge-danger">{{$totalAdminUsers}}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin_payment_history')}}"
                       class="nav-link @if($activeMenu == 'payment-history') active @endif">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>{{__('default.manage_payments')}}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('profile')}}" class="nav-link @if($activeMenu == 'user-details') active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>{{__('default.edit_profile')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('change_password')}}"
                       class="nav-link @if($activeMenu == 'changePassword') active @endif">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>{{__('default.change_password')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}"
                       class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{__('default.logout')}}</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
