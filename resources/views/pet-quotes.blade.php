
<link rel="stylesheet" type="text/css" href="{{ asset('/css/quote.css') }}">

<div class="container-fluid quotes-section">
	<div class="quote-overlay"></div>

	<!-- Quotes Slider -->

	<div class="container slider-section">
		<div class="row">
			<div class="col-md-offset-1 col-md-1 slider-btn-section">
				<a role="button"><div class="slider-left-btn"></div></a>
			</div>
			<div class="col-md-8 slider-body">
				<div class="slider-content text-center" id="content0">
					<p class="author-text">This is a speech. This is a speech. This is a speech. This is a speech.</p>
					<h3 class="author-name">MK Shahriar</hy3>
				</div>
				<div class="slider-content text-center active-content" id="content1" style="display: block;">
					<p class="author-text">This is a speech. This is a speech. This is a speech. This is a speech. This is a speech.</p>
					<h3 class="author-name">Md. Nazim Boss</h3>
				</div>
			</div>
			<div class="col-md-1 slider-btn-section">
				<a role="button"><div class="slider-right-btn"></div></a>
			</div>
		</div>
	</div>

</div>

<script src="{{ url('/js/quote.js') }}" type="text/javascript"></script>