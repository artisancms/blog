<?php

namespace ArtisanCMS\Blog\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use ArtisanCMS\Blog\Models\Post;
use App\Http\Controllers\Controller;

class BlogAdminController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(config('artisancms-blog.perPage'));
        return view('admin::blog.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin::blog.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('admin/blog');
    }

    public function edit($id)
    {
        return Post::find($id);
    }
}
