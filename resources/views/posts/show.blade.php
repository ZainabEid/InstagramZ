@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        <div class="col-4">
            {{-- HEADER --}}
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

                {{-- follow button --}}
                <div class="pl-1">
                    <a href="#">Follow</a>
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
