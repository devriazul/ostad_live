<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'blog_post_id' => 'required|exists:blog_posts,id',
            'content' => 'required',
        ]);

        $blogPost = BlogPost::find($validatedData['blog_post_id']);

        $comment = new Comment();
        $comment->content = $validatedData['content'];

        $blogPost->comments()->save($comment);

        return response()->json([
            'message' => 'Comment created successfully',
            'comment' => $comment
        ]);
    }
}
