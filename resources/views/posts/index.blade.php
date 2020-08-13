@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ( $posts as $post )

    <div class="row">

        <div class="col-8 offset-2">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        <div class="col-8 offset-2">
            
            {{-- Caption CONTENT --}}
            <div class="d-flex pt-2 pb-4">
                {{-- user name --}}
                <span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>:
                </span>
                {{-- description text --}}
                <div class="pl-2">
                    {{ $post->caption }}
                </div>
            </div>

        </div>
    </div>

    @endforeach

    <div class="row">
        <div class=" col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
