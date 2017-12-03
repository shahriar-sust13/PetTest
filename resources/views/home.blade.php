
@extends('layout')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">

<div class="container-fluid home-body">
	<div class="container search-section">
		<div class="row">
			<div class="col-md-offset-1 col-md-3">
				@include('select')
			</div>
			<div class="col-md-3">
				@include('select2')
			</div>
			<div class="col-md-offset-2 col-md-3">
				@include('filter-btn')
			</div>
		</div>
	</div>
	<div class="container pet-grid">
		<div class="row">
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet1">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet1.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Husky Puppy</p>
						<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet2">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet2.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Husky Puppy</p>
						<p class="pet-tag"><span class="label label-primary">4500 Tk</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet3">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet3.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Corgi Dog</p>
						<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet4">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet4.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Three Kittens</p>
						<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet5">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet4.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Three Kittens</p>
						<p class="pet-tag"><span class="label label-primary">15000 Tk</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet6">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet3.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Corgi Dog</p>
						<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet7">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet2.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Husky Puppy</p>
						<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
			<div class="col-md-3 grid-cell">
				<div class="pet-container" id="pet8">
					<div class="cell-img text-center">
						<img src="{{ url('images/pet1.jpg') }}">
					</div>
					<div class="cell-text-section text-center">
						<p class="pet-name">Husky Puppy</p>
						<p class="pet-tag"><span class="label label-primary">24000 Tk</span></p>
					</div>
					<div class="overlay"></div>
					<a href="#" class="text-center">Details</a>
				</div>
			</div>
		</div>
		<div class="row pagination-section text-center">
			<ul class="pagination">
			    <li class="active"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
		    	<li><a href="#">5</a></li>
		  	</ul>
		</div>
	</div>

</div>
<script src="{{ url('/js/home.js') }}" type="text/javascript"></script>

@endsection