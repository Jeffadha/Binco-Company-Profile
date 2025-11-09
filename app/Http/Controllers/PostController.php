<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts', compact('posts'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'required|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
            $validated['image'] = 'uploads/posts/'.$filename;
        }

        Post::create($validated);
        return back()->with('success', 'Post created successfully!');
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($post->image && file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }
            $filename = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
            $validated['image'] = 'uploads/posts/'.$filename;
        }

        $post->update($validated);
        return back()->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        if ($post->image && file_exists(public_path($post->image))) {
            unlink(public_path($post->image));
        }
        $post->delete();

        return back()->with('success', 'Post deleted successfully!');
    }
}
