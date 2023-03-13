<?php

namespace App\Modules\Services\Portal\Restaurant;

use App\Http\Resources\Portal\Restaurant\MenuCategoriesResource;
use App\Http\Resources\Portal\Restaurant\MenuCategoryResource;
use App\Models\MenuCategory;
use Illuminate\Support\Arr;

class MenuCategoryService
{
    /**
     * Список позиции ресторана
     *
     * @param string $restaurant_id ID ресторана
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function list(string $restaurant_id)
    {
        return MenuCategoriesResource::collection(MenuCategory::list($restaurant_id))->response()->getData(true);
    }

    /**
     * Добавление новый категории в меню ресторана
     *
     * @param string $restaurant_id ID ресторана
     * @param array<mixed> $data Данные из запроса
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function add(string $restaurant_id, array $data)
    {
        return new MenuCategoryResource(MenuCategory::create(Arr::add($data, "restaurant_id", $restaurant_id)));
    }

}
