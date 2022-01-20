<?php

namespace Modules\Support\Http\Controllers\Api;

use Modules\Support\Country;

class CountryAndPhoneCodeController
{
    /**
     * Display a listing of the resource.
     *
     * @param string $countryCode
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $countrysWithCode = Country::allWithCode();

        return response($countrysWithCode);
    }
}
