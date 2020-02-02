<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(16),
            'count_articles' => Article::count(),
        ]);
    }

    public function show()
    {
        return view('posts.show');
    }

}
