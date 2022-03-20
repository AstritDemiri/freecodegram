<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        $data = $request->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = $request->file('image')->store('public');
        //$imagePath = Storage::putFile('public', $request->file('image'));
        // dd($imagePath);

        //$image = Image:: make(public_path("storage/$imagePath"))->fit(1200, 1200);
        //  $image->save();


        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);


        return redirect()->route('profiles.show', ['user' => auth()->user()->id]);


    }
}
