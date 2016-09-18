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
        $posts = Post::orderBy('publish_at', 'DESC')
                    ->where('publish_at', '<=', \Carbon\Carbon::now())
                    ->paginate(config('artisancms-blog.perPage'));
        return view('theme::blog', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('theme::post', ['post' => $post]);
    }
}
