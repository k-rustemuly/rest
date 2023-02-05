<?php

namespace App\Modules\Services;

use App\Http\Resources\CategoryResource;
use App\Models\MenuCategory;

class CategoryService
{
    public function list(int $restaurantId = 0)
    {
        $categories = MenuCategory::where('restaurant_id', $restaurantId)->orderBy('order_number')->get();
        return CategoryResource::collection($categories);
    }
}
