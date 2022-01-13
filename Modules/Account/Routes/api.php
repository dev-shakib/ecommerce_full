<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::get('account', 'AccountDashboardController@index');

    Route::get('account/profile', 'AccountProfileController@edit');
    Route::post('account/profile', 'AccountProfileController@update');

    Route::get('account/orders', 'AccountOrderController@index');
    Route::get('account/orders/{id}', 'AccountOrderController@show');

    Route::get('account/wishlist', 'AccountWishlistController@index');

    Route::get('account/reviews', 'AccountReviewController@index');
});
