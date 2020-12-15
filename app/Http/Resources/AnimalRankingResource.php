<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalRankingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "species" => $this->species,
            "image_url" => $this->image_url,
            "percentageOfLikes" => round($this->likes /(($this->likes + $this->dislikes) ?: 1) * 100),
        ];
    }
}