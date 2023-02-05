<?php

namespace App\Modules\Services;

use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;

class RestaurantService
{
    public function about(string $slug)
    {
        $restaurant = Restaurant::where('slug', $slug)->first();
        return new RestaurantResource($restaurant);
    }
}
