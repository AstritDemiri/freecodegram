<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'another' => '',
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        auth()->user()->posts()->create($request->all());
    }
}
