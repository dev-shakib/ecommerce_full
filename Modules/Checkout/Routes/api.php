<?php

use Illuminate\Support\Facades\Route;

Route::get('checkout', 'CheckoutController@create');

Route::post('checkout', 'CheckoutController@store');

Route::get('checkout/{orderId}/complete', 'CheckoutCompleteController@store');
Route::get('checkout/complete', 'CheckoutCompleteController@show');

Route::get('checkout/{orderId}/payment-canceled', 'PaymentCanceledController@store');
