<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('home', compact('blogs'));
    }

    public function allBlogs()
    {
        $blogs = Blog::all();
        return view('blogs.all', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // Validate the request inputs

        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $request->input('image'),
            'publish_date' => $request->input('publish_date'),
            'author' => $request->input('author'),
        ]);

        return redirect()->route('blogs.all')->with('success', 'Blog created successfully!');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function storeComment(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->comments()->create([
            'content' => $request->input('content'),
            // Other comment fields if necessary
        ]);
        return back()->with('success', 'Comment added successfully!');
    }
}
