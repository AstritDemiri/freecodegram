<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request('image')->store('uploads','public');
        $request->validate([
            'another' => '',
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
      //  Storage::$request('image')->put('uploads', 'public');
       // Storage::disk('local')->put('image', 'Upload');
        auth()->user()->posts()->create($request->all());
    }
}
