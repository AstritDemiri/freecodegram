@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img
                    src="https://yt3.ggpht.com/ytc/AKedOLRyPFojwY3CXV5ks5TwPrt2VifQn-nYNfkgLvVPkw=s88-c-k-c0x00ffffff-no-rj"
                    class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">

                    <div><h1>{{ $user->username }} </h1></div>
                    <a href="/p/create">Add new Post </a>

                </div>
                <a href="/profile/{{$user->id}}/edit"> Edit Profile</a>
                <div class="d-flex">
                    <div><strong> {{$user->posts->count()}}</strong> posts</div>
                    <div><strong> 23k </strong> followers</div>
                    <div><strong> 212</strong> following</div>
                </div>
                <div>Title: {{ $user->profile->title }} </div>
                <div>Desc: {{ $user->profile->description }} </div>
                <div>Url: <a href="{{ $user->profile->url }}"> {{ $user->profile->url }} </a></div>
            </div>
        </div>
        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
