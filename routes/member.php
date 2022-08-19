<?php
/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
|
| Here is where you can register member routes for your application. These
| routes are loaded by the RouteServiceProvider . Now create something great!
|
*/

Route::get('dashboard', 'member\DashboardController@index')->name('memberDashboard');
Route::post('save-personal-details', 'member\DashboardController@savePersonalDetails')->name('savePersonalDetails');


Route::get('save-ad-as-favorite/{slug}', 'member\DashboardController@saveAdAsFavorite');


Route::group(['prefix' => 'ads'], function () {
    Route::get('/', 'member\AdsController@index')->name('memberAds');
    Route::get('published', 'member\AdsController@published')->name('memberPublishedAds');
    Route::get('favourite', 'member\AdsController@favourite')->name('memberFavouriteAds');
    Route::get('pending', 'member\AdsController@pending')->name('memberPendingAds');
    Route::get('archived', 'member\AdsController@archived')->name('memberArchivedAds');

    Route::get('create', 'member\AdsController@create')->name('memberCreateAds');
    Route::post('store', 'member\AdsController@store')->name('memberStoreAds');
    Route::get('edit/{id}', 'member\AdsController@edit')->name('memberEditAds');
    Route::post('update/{id}', 'member\AdsController@update')->name('memberUpdateAds');
    Route::get('delete/{id}', 'member\AdsController@delete');
    Route::get('remove-image/{media_id}', 'admin\AdsController@removeImage');

    Route::get('get-state-by-country/{country_id}', 'member\AdsController@getStateByCountry');
    Route::get('get-city-by-state/{state_id}', 'member\AdsController@getCityByState');
    Route::get('get-brand-by-category/{category_id}', 'member\AdsController@getBrandByCategory');


    Route::post('report-ads', 'member\AdsController@reportAds');

});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', 'member\ProfileController@index')->name('memberProfile');
    Route::get('edit', 'member\ProfileController@edit')->name('memberEditProfile');
    Route::post('update', 'member\ProfileController@update')->name('memberUpdateProfile');
    Route::get('change-password', 'member\ProfileController@changePassword')->name('memberChangePassword');
    Route::post('save-password', 'member\ProfileController@savePassword')->name('memberSavePassword');
});

Route::group(['prefix' => 'inquiry'], function () {
    Route::get('/{id?}', 'member\InquiryController@index')->name('memberInquiry');
    Route::post('store', 'member\InquiryController@store')->name('memberStoreInquiry');
    Route::post('reply-store/{inquiry_id}', 'member\InquiryController@replyStore')->name('memberReplyStoreInquiry');
});

Route::group(['prefix' => 'payment'], function () {
    Route::get('/', 'member\PaymentController@index')->name('memberPayment');
    Route::get('checkout/{transaction_id}', ['as' => 'payment_checkout', 'uses' => 'member\PaymentController@checkout']);
    Route::post('checkout/{transaction_id}', ['uses' => 'member\PaymentController@chargePayment']);
    Route::post('checkout/{transaction_id}/payment-success', ['as' => 'payment_success_url', 'uses' => 'member\PaymentController@paymentSuccess']);
    Route::post('checkout/{transaction_id}/paypal-notify', ['as' => 'paypal_notify_url', 'uses' => 'member\PaymentController@paypalNotify']);
});


Route::group(['prefix' => 'paypal'], function () {
    Route::post('submit-payment/{local_transaction_id}', ['as' => 'submit_paypal_payment', 'uses' => 'member\PaypalController@submitPayment']);
    Route::get('get-status', ['as' => 'get_paypal_status', 'uses' => 'member\PaypalController@getStatus']);
});


