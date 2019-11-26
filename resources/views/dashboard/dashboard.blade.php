@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Posts
                    <span class="float-right"><a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a></span>
                </div>

                @if($userPosts->isEmpty())
                    <div class="card-title text-center py-2">No posts yet, add some now?</div>
                @else
                    <table class="table">
                        {{--                    <caption>List of posts</caption>--}}
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Likes</th>
                            <th scope="col">Views</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($userPosts as $post)

                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ Str::limit($post->description, $limit = 150, $end = '...') }}</td>
                                <td>{{ $post->likes }}</td>
                                <th>{{ $post->views }}</th>
                                <td>

                                    <a href="{{ route('posts.edit', $post->id) }}"
                                       class="btn btn-success btn-sm float-right mx-1">Edit</a>

                                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-sm btn-danger delete-user"
                                                   value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
