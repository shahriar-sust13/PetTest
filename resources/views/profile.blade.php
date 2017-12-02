
<head>
	@include('font')
	<link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
</head>

@extends('layout')

@section('content')

<div class="profile-bg"></div>

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 profile-box">
			<div class="col-md-3 profile-pic-container">
				<div class="profile-pic">
					<img src="{{ url('images/nazim.jpg') }}">
				</div>
			</div>
			<div class="col-md-9 profile-intro-section">
				<h5>Md. Nazim Uddin</h5>
				<p>
					Hi, I'm Nazim. I'm a smart boy. I'm from Shaheen College. Everyone please respect me, salute me. I'll give you money, if you respect me. Hi, I'm Nazim. I'm a smart boy. I'm from Shaheen College. Everyone please respect me, salute me.
				</p>
				<!--
				<div class="col-md-10 social-span">
					<a id="facebook" href="#"></a>
					<a id="twitter" href="#"></a>
				</div>
				-->
			</div>
		</div>
	</div>
</div>

<div class="container profile-body">
	<div class="row">
		<div class="col-md-offset-1 col-md-10 col-sm-12 tab-menu-section">
			<a id="item1" class="col-sm-4 col-md-2 menu-item active-item text-center" role="button">My Pet</a>
			<a id="item2" class="col-sm-4 col-md-2 menu-item text-center" role="button">My Blog</a>
		</div>
	</div>
</div>

<div id="tab1" class="tab-content active-tab">
	@include("my-pet")
</div>

<div id="tab2" class="tab-content disable-tab">
	@include('my-blog')
</div>


<script src="{{ url('js/profile.js') }}" type="text/javascript"></script>

@endsection