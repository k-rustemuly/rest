<?php

namespace App\Modules\Services\Portal;

use App\Http\Resources\Portal\PositionsResource;
use App\Models\Position;

class PositionService
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
        return PositionsResource::collection(Position::list($params))->response()->getData(true);
    }

    public function add(array $fields)
    {
        return Position::create($fields);
    }
}
