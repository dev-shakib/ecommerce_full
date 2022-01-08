<?php

namespace Modules\Cart\Http\Controllers\Api;
use Modules\Cart\Facades\Cart;

class CartController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::instance();
        return $cart;
    }
}
