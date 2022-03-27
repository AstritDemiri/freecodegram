<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('profiles.index', ['users' => $users]);
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
        return view('profiles.edit', compact('user'));
    }
   public function update(User $user)
    {
        //$this->authorize('update',$user->profile);
        $data = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
            ]);

        $user()->profile->update($data);

        return redirect("/profile/$user->id");

    }
}
