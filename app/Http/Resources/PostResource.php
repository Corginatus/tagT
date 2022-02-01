<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $image = null;
        try {
            $image = env('APP_URL').$this->image->path;
        } catch (\Exception $e) {

        }

        return [
            'id' => $this->id,
            'image' => $image,
            'title' => $this->title,
            'language' => $this->language,
            'client' => $this->client,
            'website' => $this->website,
            'description' => $this->description,
            'industry' => $this->industry,
            'type' => $this->type,
            'increase_traffic' => $this->increase_traffic,
            'problem' => $this->problem,
            'solution' => $this->solution,
            'date' => $this->date,
        ];
    }
}
