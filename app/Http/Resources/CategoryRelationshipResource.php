<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryRelationshipResource extends JsonResource
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
            'articles' => (new CategoryArticleRelationshipResource($this->post))->additional(['category' => $this]),
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('categories.index'),
            ],
        ];
    }
}
