@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>

                    <div class="card-body">
                        @isset($post)
                            <form method="POST" action="{{ route('posts.update', $post->id) }}">
                                <input name="_method" type="hidden" value="PUT">
                                @else
                                    <form method="POST" action="{{ route('posts.store') }}">
                                        @endisset
                                        @csrf

                                        <div class="form-group row">
                                            <label for="title"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                            <div class="col-md-6">
                                                <input id="title" type="text"
                                                       class="form-control @error('title') is-invalid @enderror"
                                                       name="title"
                                                       value="{{ isset($post) ? $post->title : old('title') }}" required
                                                       autocomplete="title" autofocus>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                            <div class="col-md-6">
                                                <input id="description" type="text"
                                                       class="form-control @error('description') is-invalid @enderror"
                                                       name="description"
                                                       value="{{ isset($post) ? $post->description : old('description') }}"
                                                       required autocomplete="description">

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ isset($post) ?  __('Edit') : __('Create') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
