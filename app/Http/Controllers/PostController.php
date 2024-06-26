<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('company');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('job_title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%")
                ->orWhereHas('company', function ($query) use ($search) {
                    $query->where('company_name', 'like', "%{$search}%");
                });
        }

        $posts = $query->get();

        return view('home.jobs_applications', compact('posts'));
    }
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view('home.job_details', compact('post'));
    }

    public function create()
    {
        return view('home.create_post');
    }
}
