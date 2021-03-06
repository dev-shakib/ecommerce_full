<?php

namespace Modules\Cart\Http\Controllers\Api;

use Modules\Cart\Facades\Cart;

class CartCrossSellProductsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cart::crossSellProducts();
    }
}
