<?php

namespace App\Http\Controllers;

use App\Modules\Services\RestaurantService;
use Illuminate\Http\Request;

class RestaurantController extends BaseController
{

    public function show(Request $request, RestaurantService $restaurantService)
    {
        $slug = $request->slug;
        $restaurant = $restaurantService->about($slug);
        return $this->success($restaurant);
    }
}
