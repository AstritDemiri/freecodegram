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
    public function edit(\App\User $user)
    {

    }

}
