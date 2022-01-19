<?php
use Illuminate\Support\Facades\Route;
use Themes\Storefront\Feature;

Route::get('storefront/tab-products/sections/{sectionNumber}/tabs/{tabNumber}', 'TabProductController@index');
Route::get('storefront/product-grid/tabs/{tabNumber}', 'ProductGridController@index');
Route::get('storefront/vertical-products/{columnNumber}', 'VerticalProductController@index');
Route::get('storefront/features', function(){
    return Feature::all()->take(4);
});
// Route::get('storefront/flash-sale-products', 'FlashSaleProductController@index')->name('storefront.flash_sale_products.index');
