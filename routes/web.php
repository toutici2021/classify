<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
app()->setLocale('fr');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{

    Route::get('register-license', 'admin\LicenseController@register')->name('registerApplication');
    Route::post('activate-license', 'admin\LicenseController@activate')->name('activate');


    Auth::routes(['register' => false]);
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('get-state-by-country/{country_id}', 'admin\AdsController@getStateByCountry');
    Route::get('get-city-by-state/{state_id}', 'admin\AdsController@getCityByState');
    Route::get('get-brand-by-category/{category_id}', 'admin\AdsController@getBrandByCategory');

    /**
     * Mailchimp email subscription
     */


    Route::group(['prefix' => 'newsletter'], function () {
        route::post('subscribe', 'admin\EmailSubscriptionController@addSubscriber')->name('subscribe');
    });

    // -----------------------------forget password ------------------------------
    Route::get('forget-password', 'Auth\ForgotPasswordController@getEmail')->name('forget_password');
    Route::post('forget-password', 'Auth\ForgotPasswordController@postEmail')->name('forget_password');

    Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword')->name('reset_password');
    Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword')->name('reset_password');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', 'HomeController@index')->name('home');
    });


    Route::group(['middleware' => ['only_admin_access', 'check_license', 'active']], function () {
        Route::group(['prefix' => 'brands'], function () {
            Route::get('/', 'admin\BrandsController@index')->name('brands');
        });


        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', 'admin\SliderController@index')->name('sliders');
            Route::get('create', 'admin\SliderController@create')->name('createSlider');
            Route::post('store', 'admin\SliderController@store')->name('storeSlider');
            Route::get('edit/{id}', 'admin\SliderController@edit')->name('editSlider');
            Route::post('update/{id}', 'admin\SliderController@update')->name('updateSlider');
            Route::get('delete/{id}', 'admin\SliderController@delete');
        });


        Route::get('dashboard', 'admin\DashboardController@dashboard')->name('dashboard');

        Route::group(['prefix' => 'chart'], function () {
            Route::get('get-monthly-revenue', 'admin\DashboardController@getMonthlyRevenue');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'admin\CategoryController@index')->name('adminCategory');
            Route::post('/', 'admin\CategoryController@store')->name('storeCategory');
            Route::get('edit/{id}', 'admin\CategoryController@edit');
            Route::post('update', 'admin\CategoryController@update')->name('updateCategory');
            Route::get('delete/{id}', 'admin\CategoryController@delete');
        });


        Route::group(['prefix' => 'brands'], function () {
            Route::get('/', 'admin\BrandsController@index')->name('brands');
            Route::get('getBrandsData', 'admin\BrandsController@getBrandsData');
            Route::post('/', 'admin\BrandsController@store')->name('storeBrand');
            Route::get('edit/{id}', 'admin\BrandsController@edit');
            Route::post('update', 'admin\BrandsController@update')->name('updateBrand');
            Route::get('delete/{id}',  'admin\BrandsController@delete');

        });


        Route::group(['prefix' => 'locations'], function () {
            Route::get('states', 'admin\LocationController@states')->name('states');
            Route::get('getStateData', 'admin\LocationController@getStateData')->name('getStateData');
            Route::get('cities', 'admin\LocationController@cities')->name('cities');
            Route::get('getCityData', 'admin\LocationController@getCityData')->name('getCityData');
            Route::post('states', 'admin\LocationController@storeState')->name('storeState');
            Route::get('edit-state/{id}', 'admin\LocationController@editState');
            Route::post('update-state', 'admin\LocationController@updateState')->name('updateState');
            Route::get('states/delete/{id}', 'admin\LocationController@destroyState')->name('delete_state');
            Route::get('get-state-for-city/{country_id}', 'admin\LocationController@getStateForCity');
            Route::post('store-city', 'admin\LocationController@storeCity')->name('storeCity');
            Route::get('edit-city/{id}', 'admin\LocationController@editCity');
            Route::post('update-city', 'admin\LocationController@updateCity')->name('updateCity');
            Route::get('city/delete/{id}', 'admin\LocationController@deleteCity')->name('delete_city');
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('users', ['as' => 'users', 'uses' => 'admin\UserController@index']);
            Route::get('user-details/{id}', ['as' => 'user_details', 'uses' => 'admin\UserController@userDetails']);
            Route::get('delete/{id}', 'admin\UserController@deleteUser');

        });
        Route::group(['prefix' => 'account'], function () {
            Route::get('change-password', ['as' => 'change_password', 'uses' => 'admin\UserController@changePassword']);
            Route::post('change-password', 'admin\UserController@updatePassword')->name('updatePassword');
            Route::get('profile', ['as' => 'profile', 'uses' => 'admin\UserController@profile']);
            Route::get('profile/edit', ['as' => 'edit-profile', 'uses' => 'admin\UserController@editProfile']);
            Route::post('profile/edit', 'admin\UserController@updateProfile')->name('updateProfile');
        });


        Route::group(['prefix' => 'settings'], function () {
            Route::get('general', ['as' => 'general_settings', 'uses' => 'admin\SettingsController@GeneralSettings']);
            Route::get('subscription', ['as' => 'subscription_settings', 'uses' => 'admin\SettingsController@SubscriptionSettings']);
            Route::get('payment', ['as' => 'payment_settings', 'uses' => 'admin\SettingsController@paymentSettings']);
            Route::get('social', ['as' => 'social_url', 'uses' => 'admin\SettingsController@socialUrl']);
            Route::get('smtp', ['as' => 'smtp_settings', 'uses' => 'admin\SettingsController@smtpSettings']);
            Route::get('meta', ['as' => 'meta_management', 'uses' => 'admin\SettingsController@metaManagement']);
            Route::get('edit-meta/{id}', ['as' => 'edit_meta', 'uses' => 'admin\SettingsController@editMeta']);
            Route::post('update-meta/{id}', ['as' => 'update_meta', 'uses' => 'admin\SettingsController@updateMeta']);
            Route::get('ad', ['as' => 'ad_settings', 'uses' => 'admin\SettingsController@AdSettings']);
            Route::post('sendTestMail', 'admin\SettingsController@sendTestMail')->name('sendTestMail');
            Route::get('other', ['as' => 'other_settings', 'uses' => 'admin\SettingsController@OtherSettings']);
            Route::get('backup-database', ['as' => 'backup_database', 'uses' => 'admin\BackupController@index']);
            Route::get('download-database/{id}', ['as' => 'download_database', 'uses' => 'admin\BackupController@downloadDatabase']);
            Route::get('delete-database/{id}', 'admin\BackupController@delete');
            Route::post('other', ['as' => 'saveOtherSettings', 'uses' => 'admin\SettingsController@saveOtherSettings']);

            Route::post('saveMailEnvironment', 'admin\SettingsController@saveMailEnvironment')->name('saveMailEnvironment');
            Route::get('create-new-database-backup', ['as' => 'create_new_database_backup', 'uses' => 'admin\BackupController@store']);
            Route::post('save-settings', 'admin\SettingsController@updateSettings')->name('save_settings');
            Route::post('save-payment-settings', ['as' => 'save_payment_settings', 'uses' => 'admin\SettingsController@savePaymentSettings']);
            Route::post('save-mailchimp-settings', ['as' => 'save_mailchimp_settings', 'uses' => 'admin\SettingsController@saveMailchimpSettings']);

            Route::get('country', ['as' => 'country_list', 'uses' => 'admin\SettingsController@countries']);

            Route::get('monetize', ['as' => 'monetize', 'uses' => 'admin\SettingsController@monetize']);

        });

        Route::group(['prefix' => 'pages'], function () {
            Route::get('/', ['as' => 'pages', 'uses' => 'admin\PostController@pages']);
            Route::post('/', ['as' => 'storePage', 'uses' => 'admin\PostController@storePage']);
            Route::get('getPages', 'admin\PostController@getPages');
            Route::get('create-page', ['as' => 'createPage', 'uses' => 'admin\PostController@createPage']);
            Route::get('edit/{id}', ['as' => 'editPage', 'uses' => 'admin\PostController@edit']);
            Route::post('update/{id}', ['as' => 'updatePage', 'uses' => 'admin\PostController@update']);
            Route::get('delete/{id}', 'admin\PostController@delete');
        });

        Route::group(['prefix' => 'ads'], function () {
            Route::get('approved-ads', ['as' => 'approved_ads', 'uses' => 'admin\AdsController@index']);
            Route::get('premium-pending', ['as' => 'premium_pending_ads', 'uses' => 'admin\AdsController@premiumPendingAds']);
            Route::get('regular-pending', ['as' => 'regular_pending_ads', 'uses' => 'admin\AdsController@regularPendingAds']);
            Route::get('blocked', ['as' => 'blocked_ads', 'uses' => 'admin\AdsController@blockedAds']);
            Route::get('create', ['as' => 'create_ads', 'uses' => 'admin\AdsController@create']);
            Route::post('store', ['as' => 'store_ads', 'uses' => 'admin\AdsController@store']);
            Route::get('status-change/{slug}/{value}', 'admin\AdsController@adStatusChange');
            Route::get('edit/{id}', ['as' => 'edit_ad', 'uses' => 'admin\AdsController@edit']);
            Route::post('update/{id}', ['as' => 'update_ad', 'uses' => 'admin\AdsController@update']);
            Route::get('delete/{id}', 'admin\AdsController@delete');
            Route::get('remove-image/{media_id}', 'admin\AdsController@removeImage');
            Route::get('all-reported-ads', ['as' => 'all_reported_ads', 'uses' => 'admin\AdsController@allReportedAds']);
            Route::get('delete-ads-report/{id}', 'admin\AdsController@deleteAdsReport');
        });


        Route::group(['prefix' => 'contact'], function () {
            Route::get('contact-messages', ['as' => 'contact_messages', 'uses' => 'admin\EnquiryController@contactMessages']);
            Route::post('send-enquiry-reply', 'admin\EnquiryController@sendEnquiryReply')->name('send-enquiry-reply');
        });


        Route::group(['prefix' => 'payment'], function () {
            Route::get('payment-history', ['as' => 'admin_payment_history', 'uses' => 'admin\PaymentController@index']);
            Route::get('payment-info/{transaction_id}', ['as' => 'payment_info', 'uses' => 'admin\PaymentController@paymentInfo']);
        });

        Route::group(['prefix' => 'report'], function () {
            Route::get('payment-report', ['as' => 'payment_report', 'uses' => 'admin\ReportController@paymentReport']);
            Route::get('get-monthly-payment-report', 'admin\ReportController@getMonthlyPaymentReport');
            Route::get('filtered-report/{year?}', ['as' => 'payment_report_filtered', 'uses' => 'admin\ReportController@filterPaymentReport']);
            Route::get('get-monthly-payment-report-for-selected-year', 'admin\ReportController@getMonthlyPaymentReportForSelectedYear');
            Route::get('paymentExport/{year?}', 'admin\ReportController@paymentExport')->name('paymentExport');
            Route::get('user-registration-report', ['as' => 'user_registration_report', 'uses' => 'admin\ReportController@userRegisterReport']);
        });


        Route::group(['prefix' => 'administrators'], function () {
            Route::get('/', ['as' => 'administrators', 'uses' => 'admin\UserController@administrators']);
            Route::get('create', ['as' => 'add_administrator', 'uses' => 'admin\UserController@addAdministrator']);
            Route::post('create', ['uses' => 'admin\UserController@storeAdministrator'])->name('postAdministrator');

            Route::get('block-unblock/{user_id}/{status}', 'admin\UserController@blockUnblockUser')->name('blockUnblockUser');
            Route::post('remove-admin-user', ['as' => 'removeAdminUser', 'uses' => 'admin\UserController@removeAdminUser']);

        });

    });


    /** ======= public routes===== */


    Route::group(['middleware' => ['guest']], function () {
        Route::get('member-registration', 'frontend\RegisterController@index')->name('memberRegistration');
        Route::post('store-registration-info', 'frontend\RegisterController@store')->name('storeRegistrationInfo');
        Route::get('verify-member-email-address/{activation_code}', 'frontend\RegisterController@verifyMemberEmailAddress')->name('verifyMemberEmailAddress');
    });

    Route::group(['prefix' => 'reference'], function () {
        Route::get('subcategoey-for-category/{category_id}', 'frontend\ReferenceController@subcategoeyForCategory');
        Route::get('state-for-country/{country_id}', 'frontend\ReferenceController@stateForCountry');
        Route::get('city-for-state/{state_id}', 'frontend\ReferenceController@cityForState');
        Route::post('login-from-modal', 'frontend\ReferenceController@loginFromModal')->name('loginFromModal');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/{path1?}', 'frontend\CategoryController@index')->name('categories');
    });


    Route::group(['prefix' => 'ads-listing'], function () {
        Route::get('premium', 'frontend\AdsListingController@premium')->name('adsListingPremium');
        Route::get('regular', 'frontend\AdsListingController@regular')->name('adsListingRegular');
        Route::get('search', 'frontend\AdsListingController@search')->name('adsListingSearch');
        Route::get('/{path1?}', 'frontend\AdsListingController@index')->name('adsListing');
    });


    Route::group(['prefix' => 'page'], function () {
        Route::get('contact-us', 'frontend\PageController@contactUs')->name('contactUs');
        Route::post('send-contact-us-info', 'frontend\PageController@sendContactUsInfo')->name('sendContactUsInfo');
        Route::get('/{path1?}', 'frontend\PageController@dynamicPage')->name('dynamicPage');
    });


    Route::group(['prefix' => 'store'], function () {
        Route::get('/{path1?}', 'frontend\StoreController@index')->name('sellerStore');
    });

    Route::get('/{path1?}', 'frontend\IndexController@index')->name('rootPath');


});


