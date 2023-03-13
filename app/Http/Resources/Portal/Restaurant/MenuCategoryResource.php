<?php

namespace App\Http\Resources\Portal\Restaurant;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name_kk" => $this->name_kk,
            "name_ru" => $this->name_ru,
            "order_number" => $this->order_number,
            "created_at" => Carbon::parse($this->created_at)->isoFormat('MMMM Do YYYY, HH:mm'),
            "updated_at" => Carbon::parse($this->updated_at)->isoFormat('MMMM Do YYYY, HH:mm'),
        ];
    }
}
