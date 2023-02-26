<?php

namespace App\Http\Resources\Portal;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
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
            "city" => $this->city->name,
            "slug" => $this->slug,
            "name" => $this->name,
            "address" => $this->address,
            "logo" => $this->logo,
            "icon" => $this->icon,
        ];
    }
}
