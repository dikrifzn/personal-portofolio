<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::select('id', 'title', 'category', 'cover_image', 'description', 'created_at')->withCount(['likes', 'comments'])->latest('id')->take(3)->get();

        return view('blog', compact('posts'));
    }

    public function show($id){
        $post = Post::where('id', $id)->withCount(['likes', 'comments'])->first();
        $comments = Comment::latest()->get();

        return view('blogDetile', compact('post', 'comments'));
    }

    public function store(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $id,
            'name' => $validated['name'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->back()->with('success', 'Comment berhasil ditambahkan!');
    }

    public function like($id){
        $ip = request()->ip();
        $post = Post::findOrFail($id);

        $existingLike = Like::where('post_id', $id)->where('ip_address', $ip)->first();

        if (!$existingLike) {
            Like::create([
                'post_id' => $id,
                'ip_address' => $ip
            ]);

            return back()->with('success', 'You liked this post!');
        } else {
            return back()->with('error', 'You already liked this post.');
        }
    }
}
