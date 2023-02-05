<?php

namespace App\Modules\Services;

use App\Http\Resources\ItemResource;
use App\Models\MenuItem;

class ItemService
{
    public function list(int $restaurantId = 0)
    {
        $categories = MenuItem::where('restaurant_id', $restaurantId)->orderBy('category_id')->orderBy('order_number')->get();
        return ItemResource::collection($categories)->groupBy('category_id');
    }
}
