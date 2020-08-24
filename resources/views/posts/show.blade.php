@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-8">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>

        <div class="col-4">

            {{-- POST HEADER --}}
            <div class="d-flex justify-content-between align-items-center">
            
                {{-- Post header left side --}}
                <div class="d-flex align-items-center">
                  
                    {{-- profile image --}}
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class='rounded-circle w-100' style="max-width:  40px">
                    </div>

                    {{-- user name --}}
                    <div class="font-weight-bold pr-1">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </div>

                    {{-- separator cirle --}}
                    <svg height="8" width="8">
                        <circle cx="4" cy="4" r="3" fill="dark-grey" />
                    </svg>

                    {{-- Follow Link Vue Component --}}
                    <div class="pl-1">
                         <follow-link user-id="{{ $post->user_id }} " follows="{{ $follows }}"> </follow-link>
                    </div>  

                </div>

                {{-- post header right part --}}
                <div class="dropdown">

                    {{-- toggle x --}}
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        X
                    </a>

                    {{-- delete dropdown  --}}
                    <ul class="dropdown-menu">
                        <li class="active">

                            <a class="dropdown-item" 
                                href="{{ route( 'post.destroy' , ['post' => $post] ) }}" 
                                onclick="event.preventDefault();
                                    document.getElementById('destroy-form').submit();">
                                <x-heroicon-o-trash class="w-100" style="max-width:  20px" />
                                DELETE
                            </a>

                            <form id="destroy-form" action="{{ route('post.destroy' , ['post' => $post] ) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            
                        </li>
                    </ul>
                </div>

            </div>
                

            <hr>

            {{-- CONTENT --}}
            <div class="d-flex">
                {{-- user name --}}
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>:
                </span>
                {{-- description text --}}
                <div class="pl-2">
                    {{$post->caption}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
