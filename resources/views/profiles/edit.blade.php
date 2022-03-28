@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('profiles.update', $user->profile->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class=".col-8.offset-2">
                    <h1>Edit Profile</h1>

                    <label for="title" class="col-md-4 col-form-label ">Title</label>

                    <div class="col-md-6">
                        <input id="title"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') ?? $user->profile->title }}"
                               autocomplete="title">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class=".col-8.offset-2">

                        <label for="description" class="col-md-4 col-form-label ">Description</label>

                        <div class="col-md-6">
                            <input id="description"
                                   type="text"
                                   class="form-control @error('description') is-invalid @enderror"
                                   name="description"
                                   value="{{ old('description')?? $user->profile->description }}"
                                   autocomplete="description">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class=".col-8.offset-2">

                            <label for="url" class="col-md-4 col-form-label ">URL</label>

                            <div class="col-md-6">
                                <input id="url"
                                       type="text"
                                       class="form-control @error('url') is-invalid @enderror"
                                       name="url"
                                       value="{{ old('url') ?? $user->profile->url }}"
                                       autocomplete="description">

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                                <input type="file" class="form-control-file" , id="image" , name="image">
                                @error('image')

                                <strong>{{ $message }}</strong>

                                @enderror

                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary"> Save Profile</button>

                            </div>

                        </div>
                    </div>
        </form>
    </div>

@endsection