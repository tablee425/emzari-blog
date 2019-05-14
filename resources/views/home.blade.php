@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Post</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">New Item Again</a>
                </div>
            </div>

            <div class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <div class="tab-content" id="v-pills-tabContent">
                
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h1>Posts
                            <a href="{{ route('post.form') }}">
                                <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                            </a>
                        </h1>
                        @if(Session::has('success'))
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                    <div id="message" class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Learn more</th>
                                <th>Created on</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts)
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>
                                            <a href="{{ route('post.detail', ['id' => $post->id]) }}">view more</a>
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center text-primary">No Posts created Yet!</p>
                            @endif
                        </table>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h1>Posts2
                            <a href="{{ route('post.form') }}">
                                <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                            </a>
                        </h1>
                        @if(Session::has('success'))
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                    <div id="message" class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Learn more</th>
                                <th>Created on</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($posts)
                                @foreach($posts as $post)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>
                                            <a href="{{ route('post.detail', ['id' => $post->id]) }}">view more</a>
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center text-primary">No Posts created Yet!</p>
                            @endif
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection