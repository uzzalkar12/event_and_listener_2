<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $articles = Article::where('user_id', $user_id)->get();
        return view('articles.index', compact('articles'));
    }
}
