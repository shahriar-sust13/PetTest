
<link rel="stylesheet" type="text/css" href="{{ asset('/css/blog.css') }}">

<div class="container-fluid blog-panel-container">
	
	<div class="container blog-panel">
		
		<div class="blog-panel-title">
			<h3 class="text-center">Latest from the Blog</h3>
		</div>

		<div class="row">
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

	</div>

</div>