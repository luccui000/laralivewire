<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Post;
use App\Policies\PostPolicy;

class PostController extends Controller
{
    //
    public function index(PostFilter $filter)
    {
        $posts = Post::with('user')->filter($filter)->get();

        return view('post')->withPosts($posts);
    }
    public function show(Post $post)
    {
        $this->authorize(PostPolicy::class, 'view');
        return view('post.show', ['post' => $post]);
    }
}
