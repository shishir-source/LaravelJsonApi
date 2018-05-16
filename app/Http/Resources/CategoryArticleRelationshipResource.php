<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryArticleRelationshipResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $category = $this->additional['category'];

        return [
            'data'  => ArticleIdentifierResource::collection($this->collection),
            'links' => [
                'related' => route('category.articles', ['category' => $category->id]),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('category.index'),
            ],
        ];
    }
}
