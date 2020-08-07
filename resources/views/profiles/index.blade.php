@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="/img/zainabeid.jpg"  class="rounded-circle p-5 img-fluid">
        </div>
        <div class="col-9 p-5">
            {{-- user name --}}
            <div class="d-flex justify-content-between align-items-baseline" >
                <div class="d-flex">
                    <div class="pr-5"><h1>{{ $user->username }}</h1></div>
                    <div class="pl-5"><button class="btn btn-primary"> Follow</button></div> 
                </div>
                <div>
                    <a href="/p/create">Add new post</a>
                </div>
               
            </div>

            {{-- user account data --}}
            <div class="d-flex">
                <div class="pr-5 "><strong>32k</strong> followers</div>
                <div class="pr-5 "><strong>132</strong> posts</div>
                <div class="pr-5 "><strong>200</strong> following</div>
            </div>

            {{-- user title and description --}}
            <div class="pt-5">
                <div class="font-weight-bold"> {{$user->profile->title}} </div>
                <div > {{$user->profile->description}} </div> 
                <div><a href="#"> {{$user->profile->url}} </a></div>
  
            </div>
        </div>
    </div>
    <div class="row pt-4">
        {{-- user posts --}}
        @foreach ($user->posts as $post )
            
        <div class="col-4">
        <img src="/storage/{{$post->image}}" class="w-100">
        </div>
    
        @endforeach
       

    </div>
</div>
@endsection
