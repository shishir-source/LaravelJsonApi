<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return ArticlesResource
     */
    public function index()
    {
        return new CategoriesResource(Category::with(['post'])->paginate());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     *
     * @return CategoryResource
     */
    public function show(Category $category)
    {
        CategoryResource::withoutWrapping();

        return new CategoryResource($category);
    }
}
