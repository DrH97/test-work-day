@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse($posts as $post)
                <div class="card mb-1">
{{--                <img class="card-img-top" src="..." alt="Card image cap">--}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->description, $limit = 100, $end = '...') }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary float-right">View Post</a>
                    </div>
                </div>
            @empty
                <div class="card-title text-center py-2">No posts yet, please check back later...</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
