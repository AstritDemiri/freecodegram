@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            @foreach ($users as $user)
                <div class="col-4 my-4">
                    <img
                        src="{{ $user->profile->url }}"
                        class="w-100">
                    <a href="{{ route('profiles.show', $user->id) }}">{{ $user->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
