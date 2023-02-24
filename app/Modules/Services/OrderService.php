<?php

namespace App\Modules\Services;

use App\Http\Resources\OrderSettingsResource;
use App\Models\OrderSettings;

class OrderService
{
    public function settings(int $restaurantId = 0)
    {
        $settings = OrderSettings::where('restaurant_id', $restaurantId)->first();
        return new OrderSettingsResource($settings);
    }
}
