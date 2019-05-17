@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <main role="main" class="container" style="margin-top: 70px">
        <section>
            <div class="row">
                <div class="col-sm-8">
                    @foreach($posts as $post)
                        <ol class="list-unstyled">
                            <div class="post-container">
                                <img class="posts-thumb" src="{{ URL::asset('uploads/'.$post->image) }}">
                                <div class="blog-post posts-1">
                                    <h2 class="blog-post-title" style="color: blue;">{{ $post->title }}</h2>
                                    <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>

                                    <p style="color: gray;">{!! \Illuminate\Support\Str::words($post->description, 30, '...') !!}</p>
                                    <blockquote>
                                        <p>
                                            <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Read more</a> </p>
                                    </blockquote>
                                </div>
                            </div>
                        </ol>
                    @endforeach
                    <nav class="blog-pagination">
                        {{ $posts->links() }}
                    </nav>
                </div>

                <aside class="col-sm-4">
                    <div class="sidebar-module">
                        <h4>Recent Posts</h4>
                        @foreach($archives as $archive)
                            <ol class="list-unstyled">
                                <a href="{{ route('post.read', ['post_id' => $archive->id]) }}">
                                    <div class="post-container">
                                        <img class="entry-thumb" src="{{ URL::asset('uploads/'.$archive->image) }}">
                                        <div class="text-block">
                                            {!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}
                                        </div>
                                    </div>
                                    
                                </a>
                            </ol>
                        @endforeach
                    </div>
                </aside>
            </div>
        </section>
    </main>
@endsection
