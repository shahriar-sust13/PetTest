
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
					<img src="{{ url('images/profiles/'.$data['imgId'].'.jpg') }}">
				</div>
			</div>
			<div class="col-md-9 profile-intro-section">
				<h5>{{ $data['name'] }}</h5>
				<p>
					{{ $data['descr'] }}
				</p>
				
				<div class="col-md-10 social-span">
					<a id="facebook" href={{"https://www.facebook.com/".$data['fb']}}></a>
					<a id="twitter" href={{"https://twitter.com/".$data['twt']}}></a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container profile-body">
	<div class="row">
		<div class="col-md-offset-1 col-md-10 col-sm-12 tab-menu-section">
			<a id="item1" class="col-sm-4 col-md-2 menu-item active-item text-center" role="button">Pet's</a>
			<a id="item2" class="col-sm-4 col-md-2 menu-item text-center" role="button">Blog's</a>
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