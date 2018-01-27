
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
					<p class="author-text">Outside of a dog, a book is a man's best friend. Inside of a dog it's too dark to read.</p>
					<h3 class="author-name">Groucho Marx</hy3>
				</div>
				<div class="slider-content text-center active-content" id="content1" style="display: block;">
					<p class="author-text">An animal's eyes have the power to speak a great language.</p>
					<h3 class="author-name">Martin Buber</h3>
				</div>
				<div class="slider-content text-center" id="content2">
					<p class="author-text">Time spent with cats is never wasted.</p>
					<h3 class="author-name">Sigmund Freud</h3>
				</div>
				<div class="slider-content text-center" id="content3">
					<p class="author-text">Money can buy you a fine dog, but only love can make him wag his tail.</p>
					<h3 class="author-name">Kinky Friedman</h3>
				</div>
				<div class="slider-content text-center" id="content4">
					<p class="author-text">A dog is the only thing on earth that loves you more than you love yourself.</p>
					<h3 class="author-name">Josh Billings</h3>
				</div>
			</div>
			<div class="col-md-1 slider-btn-section">
				<a role="button"><div class="slider-right-btn"></div></a>
			</div>
		</div>
	</div>

</div>

<script src="{{ url('/js/quote.js') }}" type="text/javascript"></script>