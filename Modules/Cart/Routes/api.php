<?php

use Illuminate\Support\Facades\Route;

Route::get('cart', 'CartController@index')->name('api.cart.index');

Route::post('cart/items', 'CartItemController@store')->name('api.cart.items.store');

Route::put('cart/items/{cartItemId}', 'CartItemController@update')->name('api.cart.items.update');

Route::delete('cart/items/{cartItemId}', 'CartItemController@destroy')->name('api.cart.items.destroy');

Route::post('cart/clear', 'CartClearController@store')->name('api.cart.clear.store');

Route::post('cart/shipping-method', 'CartShippingMethodController@store')->name('api.cart.shipping_method.store');

Route::get('cart/cross-sell-products', 'CartCrossSellProductsController@index')->name('api.cart.cross_sell_products.index');
