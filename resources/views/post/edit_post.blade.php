@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 70px">
        <section style="margin-top: 10px;">
            <div class="row">
                <div class="col-sm-7 offset-sm-1" style="background: white; padding: 20px;">
                    <form method="post" action="{{ route('post.update', ['id' => $post->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="id_title" name="title"
                                   aria-describedby="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <textarea name="summernoteInput" class="summernote"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">update post</button>
                    </form>
                </div>

                <aside class="col-sm-3" style="margin-left: 10px; padding-left: 0px; padding-right: 0px;">
                    <div class="widget-title">
                        <div class="right-side-title">ABOUT ME</div>
                    </div>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <img src="{{ URL::asset('uploads/15589569920.png') }}" style="width: 100%; height: auto;" >
                        <div class="font-weight-bold" style="margin-top: 10px;">{{ Auth::user()->name }}</div>
                        <div class="font-weight-bold" style="margin-top: 10px;">Posted: {{ $count }}</div>

                        <div style="margin-top: 10px;">
                            <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                                <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                            </a>
                        </div>
                    </div>

                    <div class="widget-title" style="margin-top: 10px;">
                        <div class="right-side-title">CLOUD LABELS</div>
                    </div>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <a href="{{ route('index') }}"><span class="badge badge-default">All</span></a>
                        <span class="badge badge-default">Tech</span>
                        <span class="badge badge-primary">Video</span>
                        <span class="badge badge-secondary">Foods</span>
                        <span class="badge badge-success">Labels</span>
                        <span class="badge badge-danger">Blogger</span>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({ height: 350 });
            $('.summernote').summernote('code', {!! json_encode($summernote->content) !!});
        });
    </script>
@endsection