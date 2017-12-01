
<head>
	<link href="{{ asset('/css/pet.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crete+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
</head>

@extends('layout')

@section('content')

<!-- <div style="display: block; height: 1000px;"></div> -->

<div class="profile-bg"></div>


<div class="container pet-body">
	<div class="row">
		<div class="col-md-offset-1 col-md-10 pet-photos-section">
			<div class="col-md-2 img-btn text-right">
				<a id="left-arrow" role="button"><div></div></a>
			</div>
			<div class="col-md-8 slider-img-container active-img" id="pet-img-0" style="display: block;">
				<img src="{{ url('images/pet3.jpg') }}">
			</div>
			<div class="col-md-8 slider-img-container" id="pet-img-1">
				<img src="{{ url('images/cover10.jpg') }}">
			</div>
			<div class="col-md-8 slider-img-container" id="pet-img-2">
				<img src="{{ url('images/pet2.jpg') }}">
			</div>
			<div class="col-md-2 img-btn text-left">
				<a id="right-arrow" role="button"><div></div></a>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-10 slider-bottom-border"></div>
	</div>

	<div class="row pet-text-section">
		<div class="col-md-offset-1">
			<h5 class="pet-name">Siberian Corgi Dog</h5>
		</div>
		<div class="col-md-offset-1 col-md-10 description-container">
			<p>
				This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description. This is a description.
			</p>
		</div>
		<div class="col-md-offset-1 col-md-2">
			<div class="author-img-container">
				<img src="{{ url('images/nazim.jpg') }}">
			</div>
		</div>
		<div class="col-md-5 author-name-container">
			<h5>Posted by <a href="#">Md. Nazim Uddin</a></h5>
		</div>
		<div class="col-md-10 col-md-offset-1 pet-label">
			<div class="col-md-offset-4 col-md-4 pet-type-container text-center">
				<h5>Seeking for Shelter</h5>
			</div>
			<div class="col-md-offset-4 col-md-4 pet-contact-container text-center">
				<button type="button" class="btn btn-success contact-btn text-center">Contact With Owner</button>
			</div>
		</div>
	</div>
</div>

<script src="{{ url('/js/pet.js') }}" type="text/javascript"></script>

@endsection