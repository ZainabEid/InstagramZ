<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data=request()->validate([
            'caption'=>'required',
            'image'=>['required','image'],
        ]);

        $imagepath = request('image')->store('uploads','public');
            $img = Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
            $img->save();
        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=> $imagepath,
        ]);
        return redirect('/profile/'.auth()->user()->id);
    }


    public function show(Post $post)
    {
        $follows = auth()->user() ? auth()->user()->following->contains($post->user_id) : false; 

        return view('posts.show', compact('post','follows'));  
    }

    public function destroy(Post $post)
    {
        // only the account owner can delete his posts !!
        ($post->user_id == auth()->user()->id) ? $post->delete() : false ;
        return redirect('/profile/'.auth()->user()->id);
    }

}

