@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}"  class="rounded-circle p-5 img-fluid w-100">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline" >
                <div class="d-flex">
                    {{-- user name --}}
                    <div class="pr-5"><h1>{{ $user->username }}</h1></div>
                    
                    {{-- Follow Button Component --}}
                    <div class="pl-5">
                    <follow-button user-id="{{ $user->id }} " follows="{{ $follows }}"> </follow-button>
                    </div>  
                </div>
                {{-- add new post --}}
                <div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new post</a>
                    @endcan
                </div>
                
               
            </div>
            {{-- Edit Profile --}}
            <div>
                @can('update', $user->profile)
                     <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
            </div>

            {{-- user account data --}}
            <div class="d-flex">
                <div class="pr-5 "><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5 "><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5 "><strong>{{ $user->following->count() }}</strong> following</div>
            </div>

            {{-- user title and description --}}
            <div class="pt-5">
                <div class="font-weight-bold"> {{$user->profile->title ?? ''}} </div>
                <div > {{$user->profile->description ?? ''}} </div> 
                <div><a href="#"> {{$user->profile->url ?? ''}} </a></div>
  
            </div>
        </div>
    </div>
    <div class="row pt-4">
        {{-- user posts --}}
        @foreach ($user->posts as $post )
            
        <div class="col-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
    
        @endforeach
       

    </div>
</div>
@endsection
