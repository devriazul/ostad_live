<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function show($id)
    {
        $blogPost = BlogPost::with('comments')->findOrFail($id);

        return view('blog.show', compact('blogPost'));
    }
}
