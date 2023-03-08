<?php

namespace App\Modules\Services\Portal;

use App\Http\Resources\Portal\CategoriesResource;
use App\Models\Category;

class CategoryService
{
    /**
     * Список позиции
     *
     * @param array<mixed> $params Параметры для фильтрации данных и поиска
     *
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function list(array $params)
    {
        return CategoriesResource::collection(Category::list($params))->response()->getData(true);
    }

    public function add(array $fields)
    {
        return Category::create($fields);
    }
}
