<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all posts
        $posts = Post::all();

        // Return view or JSON response
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create form view
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create a new post
        $post = Post::create($validatedData);

        // Redirect the user after creating the post
        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);

        // Return view or JSON response
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the post by ID
        $post = Post::findOrFail($id);

        // Return the edit form view
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Find the post by ID and update it
        $post = Post::findOrFail($id);
        $post->update($validatedData);

        // Redirect the user after updating the post
        return redirect()->route('posts.show', $post->id)
            ->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the post by ID and delete it
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect the user after deleting the post
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully!');
    }
}
