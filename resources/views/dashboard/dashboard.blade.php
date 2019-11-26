@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Posts
                    <span class="float-right"><a href="#" class="btn btn-primary">New Post</a></span>
                </div>

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
                    <tr>
                        <th scope="row">1</th>
                        <td>Post title</td>
                        <td>Otto Van Gough, the man, the legend...</td>
                        <td>2342</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm float-right mx-1">Delete</a>
                            <a href="#" class="btn btn-success btn-sm float-right mx-1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Post title</td>
                        <td>Thornton</td>
                        <td>1</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm float-right mx-1">Delete</a>
                            <a href="#" class="btn btn-success btn-sm float-right mx-1">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Post title</td>
                        <td>Short description of post...</td>
                        <td>0</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm float-right mx-1">Delete</a>
                            <a href="#" class="btn btn-success btn-sm float-right mx-1">Edit</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
