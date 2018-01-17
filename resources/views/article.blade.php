
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
	<div class="page-gap">
			
	</div>
</div>

@endsection