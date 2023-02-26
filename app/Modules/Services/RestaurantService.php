<?php

namespace App\Modules\Services;

use App\Http\Resources\Portal\RestaurantResource as PortalRestaurantResource;
use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;

class RestaurantService
{
    public function about(string $slug)
    {
        $restaurant = Restaurant::where('slug', $slug)->first();
        return new RestaurantResource($restaurant);
    }

    public function list(array $params)
    {
        return PortalRestaurantResource::collection(Restaurant::list($params))->response()->getData(true);
    }
}
