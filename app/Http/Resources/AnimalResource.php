<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "name" => $this->name,
            "age" => $this->age,
            "bio" => $this->bio,
            "species" => $this->species,
            "image_url" => $this->image_url,
        ];
    }
}
