<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function index($articleId)
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
        $articles = Article::latest()->get();
        }

        return view('articles.index', ['article' => $article]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
