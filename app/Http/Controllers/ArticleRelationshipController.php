<?php

namespace App\Http\Controllers;


use App\Article;
use App\Category;
use App\Http\Resources\CommentsResource;
use App\Http\Resources\ArticlesResource;
use App\Http\Resources\PeopleResource;

class ArticleRelationshipController extends Controller
{
    public function author(Article $article)
    {
        return new PeopleResource($article->author);
    }

    public function comments(Article $article)
    {
        return new CommentsResource($article->comments);
    }

    public function articles(Category $category)
    {
        return new ArticlesResource($category->post);
    }
}
