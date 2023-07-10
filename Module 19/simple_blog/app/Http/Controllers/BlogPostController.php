<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('blog.index', compact('blogPosts'));
    }

    public function show($id)
    {
        $blogPost = BlogPost::find($id);
        return view('blog.show', compact('blogPost'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        BlogPost::create($validatedData);

        return redirect('/blog-posts')->with('success', 'Blog post created successfully');
    }
}
