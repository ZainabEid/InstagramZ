<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{

    /**
     * Show the Profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $follows = auth()->user() ? auth()->user()->following->contains($user->id) : false; 
        return view('profiles.index',compact('user','follows'));

    }

    /**
     * Edit the Profile.
     *
     * @return the edit view
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view ('profiles.edit',compact('user'));
    } 

    /**
     * update the editable profile.
     *
     * @return redirect to profile
     */
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url' => '',
            'image' => '',
        ]);

        if (request('image')){
            $imagePath = request ('image')->store('profile','public');
            $img = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $img->save();
            $imageArr=[ 'image' => $imagePath ];
            
        }
        
        auth()->user()->profile()->update(array_merge(
            $data,
            $imageArr ?? [],
        ));

        return redirect("/profile/".$user->id);
    }
    
}
