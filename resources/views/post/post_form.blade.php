@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Create Post</h1>
                <div class="col-md-5">
                    <form method="post" action="{{ route('post.form') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="id_title" name="title" required
                                   aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="15" name="description" required placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create post</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <label for="name">Image</label>
                    <div>
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#importModal">
                            <i class="fa fa-plus"></i> Import Image File
                        </button>
                    </div>
                    @if(Session::has('upload-status'))
                        <div class="row">
                            <div class="alert alert-success">{{ Session::get('upload-status') }}</div>
                        </div>
                    @else
                        <div class="row">
                            <div class="alert alert-success">OK!</div>
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>

    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 70px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('post.form1') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2 control-label"> Select File</label>
                                    <div class="col-md-10">
                                        <input type="file" name="import" class="btn btn-default" id="importFile" />
                                        <p class="help-block">Please choose an image to upload.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Upload File
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection