
@extends('layout')

@section('content')

<link href="{{ asset('/css/blog-home.css') }}" rel="stylesheet">

@include('font')

<div class="blog-home-bg"></div>

<div class="container-fluid blog-bg">

<div class="container blog-home">

	<div class="home-container">
		<div class="blog-title text-center">
			<h1>Latest Blog Posts</h1>
		</div>

		<div class="row articles-grid">
			@foreach($articles as $article)
				<div class="col-md-3 blog-container">
					<div class="blog-section">
						<div class="cover-section">
							<img src="{{ url('images/blog/'.$article->imageId.'.jpg') }}">
						</div>
						<div class="blog-text-section">
							<h5 class="text-center"><a href="{{ url('blog/view/'.$article->id) }}">{{ $article->title }}</a></h5>
							<p class="text-center">
								{{ $article->description }}
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		
		<div class="text-center">
			{{ $articles->links() }}
		</div>
	</div>

</div>

</div>

@endsection
