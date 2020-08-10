<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    /**
     * Show the Profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
    
        return view('profiles.index',compact('user'));

    }

    public function edit(User $user)
    {
        return view ('profiles.edit',compact('user'));
    }

    public function update(User $user)
    {
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url' => '',
            'image' => '',
        ]);

        
        $user->profile->update($data);
        return redirect('/profile/{$user->id}');
    }
}