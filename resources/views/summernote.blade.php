<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
 <style>
	textarea {
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
	}	
 </style>
  <body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('starter-template.css')}}" rel="stylesheet">
    <div class="container">

	<form action="{{route('summernotePersist')}}" method="POST">
		{{ csrf_field() }}
		<textarea name="summernoteInput" class="summernote"></textarea>
		<br>
		<button type="submit">Submit</button>
	</form>

    </div>


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script>

$(document).ready(function() {
  $('.summernote').summernote();
});

</script>
  </body>
</html>

