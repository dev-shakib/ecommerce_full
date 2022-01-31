<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');

Route::get('/sales-analytics', [
    'as' => 'admin.sales_analytics.index',
    'uses' => 'SalesAnalyticsController@index',
    'middleware' => 'can:admin.orders.index',
]);

Route::get('/support', [
    'as' => 'admin.support.index',
    'uses' => 'SupportController@index',
    // 'middleware' => 'can:admin.coupons.index',
]);

// Route::get('support/create', [
//     'as' => 'admin.support.create',
//     'uses' => 'SupportController@create',
//     'middleware' => 'can:admin.coupons.create',
// ]);

Route::post('replay-support', [
    'as' => 'admin.support.replay',
    'uses' => 'SupportController@supportReplay',
    'middleware' => 'can:admin.coupons.create',
]);

Route::get('support/{id}', [
    'as' => 'admin.support.show',
    'uses' => 'SupportController@show',
    'middleware' => 'can:admin.coupons.edit',
]);

Route::post('support/{id}', [
    'as' => 'admin.support.update',
    'uses' => 'SupportController@update',
    'middleware' => 'can:admin.coupons.edit',
]);

// Route::delete('support/{ids?}', [
//     'as' => 'admin.support.destroy',
//     'uses' => 'SupportController@destroy',
//     'middleware' => 'can:admin.coupons.destroy',
// ]);
