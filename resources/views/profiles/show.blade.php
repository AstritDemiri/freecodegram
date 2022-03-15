@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.ggpht.com/ytc/AKedOLRyPFojwY3CXV5ks5TwPrt2VifQn-nYNfkgLvVPkw=s88-c-k-c0x00ffffff-no-rj" class="rounded-circle">
        </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">

                <div><h1>{{ $user->username }} </h1></div>
                <a href="#">Add new Post </a>
            </div>
        <div class="d-flex">
        <div> <strong> 135</strong> posts </div>
        <div> <strong> 23k </strong> followers </div>
        <div> <strong> 212</strong> following </div>
    </div>
                <div>Title: {{ $user->profile->title }} </div>
                <div>Desc: {{ $user->profile->description }} </div>
                <div>Url: <a href="{{ $user->profile->url }}"> {{ $user->profile->url }} </a></div>
</div>
</div>
    <div class="row pt-5">
         <div class="col-4">
            <img src="https://img.freepik.com/free-vector/water-color-style-pregnant-program-planner-vector-illustration_6997-3538.jpg?size=664&ext=jpg" class="w-100">
         </div>
     <div class="col-4">
        <img src="https://img.freepik.com/free-vector/watercolor-hello-march-banner-background_23-2149306870.jpg?size=664&ext=jpg&ga=GA1.2.715438027.1647090720" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://img.freepik.com/free-psd/silk-tape-design-mockup_23-2149255220.jpg?size=664&ext=jpg&ga=GA1.2.715438027.1647090720" class="w-100">
    </div>
</div>
</div>
</div>
@endsection
