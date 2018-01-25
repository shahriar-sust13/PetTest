
@extends('layout')

@include('font')

@section('content')

<link href="{{ asset('/css/article.css') }}" rel="stylesheet">

<div class="container article-page">
	<div class="article-box">
		<div class="article-item article-title">
			<h3>{{ $title }}</h3>
		</div>
		<div class="article-item author-name">
			<h5>by <a href="{{ url('/profile/'.$authorId) }}">{{ $authorName }}</a></h5>
		</div>
		<div class="article-item article-img">
			<img src="{{ url('images/blog/'.$imageId.'.jpg') }}">
		</div>
		<div class="article-item article-content">
			<p>
				{{ $content }}
			</p>
		</div>
		<div class="article-item article-gap">
			
		</div>
	</div>
	<div class="comment-form-section">
		<form method="POST" action="{{url('blog/view/'.$id)}}">
			{{ csrf_field() }}
			<textarea name="comment" class="comment-content" rows="5" cols="155">
				
			</textarea>
			</br>
			</br>
			<button type="submit" class="">POST</button>
		</form>
	</div>

	@foreach($comments as $comment)
		<div class="comment-container">
			<div class="row">
				<div class="col-md-2 author-section text-center">
					<img src="{{url('images/profiles/'.$comment->imageId.'.jpg')}}">
					<h3>{{ $comment->authorName }}</h3>
				</div>
				<div class="col-md-10 comment-section">
					<p>
						{{ $comment->description }}
					</p>
				</div>
			</div>
		</div>
	@endforeach

	<div class="page-gap">
			
	</div>
</div>

@endsection