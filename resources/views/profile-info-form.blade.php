
@extends('layout')

@section('content')

<link href="{{ asset('/css/info-form.css') }}" rel="stylesheet">
@include('font')

<div class="container info-form">
	
	<div class="info-form-container">
		<div class="headline-container text-center">
			<h3>Complete Your Profile</h3>
		</div>
		<div class="info-item">
			<h5>Facebook Profile</h5>
			<input type="text" name="facebook" class="info-profile">
		</div>
		<div class="info-item">
			<h5>Twitter Profile</h5>
			<input type="text" name="twitter" class="info-profile">
		</div>
		<div class="info-item">
			<h5>Mobile Number</h5>
			<input type="text" name="mobileno" class="info-profile">
		</div>
		<div class="info-item">
			<h5>About Yourself</h5>
			<textarea class="description-text">
			
			</textarea>
		</div>
	</div>

</div>

@endsection