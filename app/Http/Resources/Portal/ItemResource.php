<?php

namespace App\Http\Resources\Portal;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            "description_kk" => $this->description_kk,
            "description_ru" => $this->description_ru,
            "poster_url" => $this->poster_url,
            "image_url" => $this->image_url,
            "created_at" => Carbon::parse($this->created_at)->isoFormat('MMMM Do YYYY, HH:mm'),
            "updated_at" => Carbon::parse($this->updated_at)->isoFormat('MMMM Do YYYY, HH:mm'),
        ];
    }
}
