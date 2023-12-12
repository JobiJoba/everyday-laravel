<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Article::class);

        return ArticleResource::collection(Article::all());
    }

    public function store(ArticleRequest $request)
    {
        $this->authorize('create', Article::class);

        return new ArticleResource(Article::create($request->validated()));
    }

    public function show(Article $article)
    {
        $this->authorize('view', $article);

        return new ArticleResource($article);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $this->authorize('update', $article);

        $article->update($request->validated());

        return new ArticleResource($article);
    }

    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);

        $article->delete();

        return response()->json();
    }
}
