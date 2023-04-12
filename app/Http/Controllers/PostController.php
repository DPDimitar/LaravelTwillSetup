<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(PostRepository $postRepository)
    {
        $this->repository = $postRepository;
    }

    public function index()
    {
        return view('posts.index', ['posts' => $this->repository->allPosts()]);
    }

    public function show($slug)
    {

        $post = $this->repository->forSlug($slug);
        abort_unless($post, 404, 'Post ');

        return view('posts.show', compact('post'));

    }
}
