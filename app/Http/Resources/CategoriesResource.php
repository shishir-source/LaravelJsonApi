<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class CategoriesResource extends ResourceCollection
{
/**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => CategoryResource::collection($this->collection),
        ];
    }

    public function with($request)
    {

        return [
            'links'    => [
                'self' => route('categories.index'),
            ],
            'included' => '',
        ];
    }
}
