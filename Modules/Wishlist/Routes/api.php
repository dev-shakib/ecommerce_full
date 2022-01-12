<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('wishlist', 'WishlistController@store');
    Route::delete('wishlist/{productId}', 'WishlistController@destroy');

    Route::get('wishlist/products', 'WishlistProductController@index');
});
