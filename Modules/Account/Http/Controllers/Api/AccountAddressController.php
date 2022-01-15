<?php

namespace Modules\Account\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Support\Country;
use Modules\Support\State;
use Modules\User\Entities\Address;
use Modules\User\Entities\User;

class AccountAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $countries = Country::supported();
        $state = State::get(key($countries));
        $userAddress = Address::where('user_id', auth('api')->user()->id)->first() ? Address::where('user_id', auth('api')->user()->id)->first(): '';
        return response([
            'address' => $userAddress,
            'countries' => $countries,
            'state' => $state
        ]);
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address_1' => ['required'],
            'address_2' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip' => ['required'],
            'country' => ['required']
        ]);

        $addressExist = Address::where('user_id', auth('api')->user()->id)->get();

        if(count($addressExist) < 1){
            Address::create([
                'user_id' => auth('api')->user()->id,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'country' => $request->country
            ]);
        }else{
            Address::where('user_id', auth('api')->user()->id)
                    ->update([
                        'address_1' => $request->address_1,
                        'address_2' => $request->address_2,
                        'city' => $request->city,
                        'state' => $request->state,
                        'zip' => $request->zip,
                        'country' => $request->country
                    ]);
        }

        return response([
            'message' => 'Address added!'
        ]);

    }


}
