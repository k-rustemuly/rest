<?php

namespace App\Modules\Services\Portal;

use App\Http\Resources\Portal\ItemsResource;
use App\Models\Item;

class ItemService
{
    /**
     * Список позиции
     *
     * @param string $category_id
     * @param array<mixed> $params Параметры для фильтрации данных и поиска
     *
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function listByCategoryId(string $category_id, array $params)
    {
        return ItemsResource::collection(Item::list($category_id, $params))->response()->getData(true);
    }

}
