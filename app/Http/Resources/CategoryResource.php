<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'type'          => 'categories',
            'id'            => (string)$this->id,
            'attributes'    => [
                'title' => $this->name,
            ],
            'relationships' => new CategoryRelationshipResource($this),
            'links'         => [
                'self' => route('categories.show', ['category' => $this->id]),
            ],
        ];
    }
}
