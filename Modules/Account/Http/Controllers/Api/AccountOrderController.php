<?php

namespace Modules\Account\Http\Controllers\Api;

class AccountOrderController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth('api')->user()
            ->orders()
            ->latest()
            ->paginate(20);

        return response([
            'orders' => $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = auth('api')->user()
            ->orders()
            ->with(['products', 'coupon', 'taxes'])
            ->where('id', $id)
            ->firstOrFail();

        return $order;
        // return view('public.account.orders.show', compact('order'));
    }
}
