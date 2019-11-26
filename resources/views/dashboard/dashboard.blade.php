@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Posts
                    <span class="float-right"><a href="#" class="btn btn-primary">New Post</a></span>
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
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($userPosts as $post)

                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->likes }}</td>
                                <td>

                                    <a href="#" class="btn btn-success btn-sm float-right mx-1">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm float-right mx-1">Delete</a>
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
