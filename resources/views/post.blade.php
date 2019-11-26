@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="form-group float-left">
                            Likes: {{ $post->likes }}
                        </div>

                        @if(auth()->id() != $post->user_id)
                            <form method="POST" action="{{ route('posts.like', $post->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="POST">

                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-success float-right" value="Like">
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
