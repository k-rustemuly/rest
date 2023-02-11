<?php

namespace App\Http\Resources;

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
            "name" => $this->name,
            "description" => $this->description,
            "poster_url" => $this->poster_url,
            "image_url" => $this->image_url,
            "price" => $this->price,
            "is_available_for_order" => $this->is_available_for_order,
            "in_cart" => false,
            "quantity" => 0
        ];
    }
}
