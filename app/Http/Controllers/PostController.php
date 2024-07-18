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

    //Rotas públicas

    public function returnIndex()
    {
        $projects = Post::limit(3)->get();
        $activities = '';

        return view('home', compact('projects', 'activities'));
    }

    public function returnProjects()
    {
        $projects = Post::all();

        return view('projects', compact('projects'));
    }

    //

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
        $projects = Post::find($postid);
        $userid = Auth::id();

        if($projects->user_id != $userid)
        {
            return response()->json(['message' => 'Acesso NEGADO!']);
        }

        return view('updatepost', compact('projects'));
    }

    public function updatePost(Request $request)
    {
        $request->validate([
            'projname' => 'required|string|max:255',
            'projcontent' => 'required|string',
            'projresume' =>'required|string|max: 100',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $postid = $request->input('projeto_id');
        $findpost = Post::find($postid);
        $userid = Auth::id();

        if($findpost->user_id != $userid)
        {
            return response()->json(['message' => 'Acesso NEGADO!']);
        }

        $findpost->title = $request->input('projname');
        $findpost->content = $request->input('projcontent');
        $findpost->resume = $request->input('projresume');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $findpost->image_path = $imagePath;
        }

        $findpost->save();

        return redirect('/post')->with('success', 'Projeto atualizado com sucesso!');

    }
}
