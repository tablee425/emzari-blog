@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="col-sm-8">
                <h1>Create Post</h1>
                <form action="{{route('post.createform')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" id="id_title" name="title" required aria-describedby="title" placeholder="Enter title">
                    <br/>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <input data-role="tagsinput" type="text" name="tags" value="a,b,c" >
                    </div>
                    <br/>
                    <textarea name="summernoteInput" class="summernote"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({ height: 350 });
        });
    </script>

@endsection