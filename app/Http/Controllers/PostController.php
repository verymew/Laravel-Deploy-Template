<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function newPost(Request $request)
    {
        $request->validate([
            'projname' => 'required|string|max:255',
            'projcontent' => 'required|string',
            'projresume' =>'required|string|max: 100',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $imagePath = $request->file('image')->store('images', 'public');

        $post = new Post([
            'title' => $request->input('projname'),
            'resume' => $request->input('projresume'),
            'content' => $request->input('projcontent'),
            'image_path' => $imagePath,
            'user_id' => $userId,
        ]);

        $user->posts()->save($post);

        return redirect('/post')->with('success', 'Projeto criado com sucesso!');
    }

    public function returnIndex()
    {
        $projects = '';
        $activities = '';

        return view('home', compact('projects', 'activities'));
    }

    public function returnProjects()
    {
        $projects = Post::all();

        return view('projects', compact('projects'));
    }

    public function editPosts(): View
    {
        $projects = Post::all();

        return view('editpost', compact('projects'));
    }

    public function deletePost($postid)
    {
        $findpost = Post::find($postid);
        $findpost->delete();

        return response()->json(['message' => 'Postagem excluída com sucesso!'], 200);
    }

    public function updatePostPage($postid)
    {
        $findpost = Post::find($postid);

        return view('updatepost', compact('findpost'));
    }

    public function updatePost($postid)
    {
        $findpost = Post::find($postid);
    }
}
