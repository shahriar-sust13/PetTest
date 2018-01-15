
@extends('layout')

@section('content')

<link href="{{ asset('/css/info-form.css') }}" rel="stylesheet">
@include('font')

<div class="container info-form">
	
	<div class="info-form-container">
		<div class="headline-container text-center">
			<h3>Complete Your Profile</h3>
		</div>
		<form method="POST" action="{{ route('infoEdit') }}">
			{{ csrf_field() }}
			<div class="info-item">
				<h5>Facebook Profile</h5>
				<input type="text" name="facebook" class="info-input">
			</div>
			<div class="info-item">
				<h5>Twitter Profile</h5>
				<input type="text" name="twitter" class="info-input">
			</div>
			<div class="info-item">
				<h5>Mobile Number</h5>
				<input type="text" name="mobileno" class="info-input">
			</div>
			<div class="info-item">
				<h5>About Yourself</h5>
				<textarea class="description-text" name="aboutMe">
				
				</textarea>
			</div>
			<div class="item-container">
				<h5>Image</h5>
				<input type="file" name="img">
			</div>
			<div class="info-item text-center">
				<button type="submit" class="article-submit-btn">Confirm</button>
			</div>
		</form>
	</div>

	<div class="page-gap">
		
	</div>

</div>

@endsection