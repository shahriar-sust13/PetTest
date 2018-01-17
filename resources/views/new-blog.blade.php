
@extends('layout')

@section('content')

@include('font')

<link href="{{ asset('/css/blog-post.css') }}" rel="stylesheet">

<div class="container blog-post-container">

	<div class="page-headline-container text-center">
		<h3>Post Your Article</h3>
	</div>
	<form class="article-form-section" method="POST" action="{{ url('/blog/post') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="item-container">
			<h5>Article Title</h5>
			<input type="text" name="article-title" class="title-text">
		</div>
		<div class="item-container">
			<h5>Content</h5>
			<textarea class="content-text" name='article-content'>
			
			</textarea>
		</div>
		<div class="item-container">
			<h5>Image</h5>
			<input type="file" name="article-img">
		</div>
		<div class="item-container text-center">
			<button type="submit" class="article-submit-btn">Submit</button>
		</div>
	</form>

</div>



@endsection