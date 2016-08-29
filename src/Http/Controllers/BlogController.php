<?php

namespace ArtisanCMS\Blog\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use ArtisanCMS\Blog\Models\Post;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(config('artisancms-blog.perPage'));
        return $posts;
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return $post;
    }
}
