@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>{{ $post->title }}</h1>
                <div class="col-sm-8 blog-main">
                    <p>{{ $post->description }}</p>
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}">
                        <button type="button" class="btn btn-primary btn-sm">Edit Post</button>
                    </a>
                    <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                        <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                    </a>
                </div>
            </main>
        </div>
    </div>
@endsection