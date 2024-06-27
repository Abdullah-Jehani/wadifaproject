<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('company', 'Application');

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
        return view('posts.create_post');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone_number' => 'required|string|max:15',
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'work_type' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $company = auth()->guard('company')->user();

        if (!$company) {
            return redirect()->back()->withErrors(['error' => 'No authenticated company found.']);
        }

        $post = new Post();
        $post->company_id = $company->id;
        $post->phone_number = $validated['phone_number'];
        $post->job_title = $validated['job_title'];
        $post->location = $validated['location'];
        $post->work_type = $validated['work_type'];
        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('post.index')->with('success', 'Job application created successfully!');
    }
}
