@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile-> profileImage() }}" class="rounded-circle w-100" alt="">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{$user->username}}</div>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new Post </a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit"> Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div><strong> {{ $user->posts->count() }}</strong> posts</div>
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
                        <img src="/storage/{{$post->image}}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
