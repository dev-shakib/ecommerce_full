<?php

namespace Modules\Slider\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Slider\Entities\Slider;

class SliderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return Slider::findWithSlides(setting('storefront_slider'));
    }

}
