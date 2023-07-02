<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        $categories = Category::all();

        return view('welcome', compact('posts', 'categories'));
    }
}
