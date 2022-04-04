<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

    public function index(User $user)
    {
        $follows =(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
//        dd($follows);
        return view('profiles.index', ['user' => $user, 'follows' => $follows]);
//        return view('profiles.index', compact('user', 'follows'));

    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profiles.show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = \request()->validate([
            'title' => 'required',
            'description' => ' required',
            'url' => 'url',
            'image' => '',
        ]);


        if(\request('image'))
        {
            $imagePath = \request()->file('image')->store('profile', 'public');
            $image = Image:: make(public_path("storage/$imagePath"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image'=>$imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
    ));


        return redirect()->route('profiles.show', auth()->user()->id);
    }
}
