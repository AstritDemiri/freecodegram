<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

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

   public function update(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>' required',
            'url'=>'url',
            'image'=>'',
        ]);

        auth()->user()->profile()->update($data);

        return redirect()->route('profiles.show', auth()->user()->id);
    }
}
