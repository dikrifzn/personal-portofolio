<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Post;
use App\Models\Message;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::latest('id')->take(2)->get();
        $posts = Post::select('id', 'title', 'category', 'description', 'cover_image')->withCount(['likes', 'comments'])->latest('id')->take(4)->get();

        return view('home', compact('projects', 'posts'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
