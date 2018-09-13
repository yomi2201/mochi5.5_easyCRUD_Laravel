<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    public function create() {
        return view('article.create');
    }
 
    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
 
        return view('article.store');
    }
}
