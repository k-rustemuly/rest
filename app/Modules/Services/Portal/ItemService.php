<?php

namespace App\Modules\Services\Portal;

use App\Http\Resources\Portal\ItemResource;
use App\Http\Resources\Portal\ItemsResource;
use App\Models\Item;
use App\Models\Upload;

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

    /**
     * Добавление нового продукта
     *
     * @param array<mixed> $data
     *
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function create(array $data)
    {
        $this->extractFiles($data);
        $item = Item::create($data);
        return new ItemResource($item);
    }

    /**
     *  часть данных с запроса обрабатываем здесь
     *  В частности переданный uuid является uuid файла в uploads.
     *  Ищем в бд и берем url файла и записываем в массив
     */
    private function extractFiles(array &$data)
    {
        $poster_uuid = $data["poster"];
        unset($data["poster"]);
        $poster = Upload::where("uuid", $poster_uuid)->first();
        $data["poster_url"] = $poster->url;

        $image_uuid = $data["image"];
        unset($data["image"]);
        $image = Upload::where("uuid", $image_uuid)->first();
        $data["image_url"] = $image->url;
    }
}
