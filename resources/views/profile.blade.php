
<head>
	@include('font')
	<link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
</head>

@extends('layout')

@section('content')

<!--
<div class="profile-bg"></div>
-->

<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 profile-box">
			<div class="col-md-3 profile-pic-container text-center">
				<div class="profile-pic">
					<img src="{{ url('images/profiles/'.$data['imgId'].'.jpg') }}">
				</div>
				@if(Auth::user()->id == $userId)
					<div class="profile-pic-btn-container">
						<button type="button" class="profile-pic-btn" data-toggle="modal" data-target="#photoModal">
						  	Change Picture
						</button>
					</div>
				@endif
				
			</div>
			<div class="col-md-9 profile-intro-section">
				<h5>{{ $data['name'] }}</h5>
				<p>
					{{ $data['descr'] }}
				</p>
				
				<div class="col-md-10 social-span">
					<a id="facebook" class="text-center" href={{"https://www.facebook.com/".$data['fb']}}>facebook</a>
					<a id="twitter" class="text-center" href={{"https://twitter.com/".$data['twt']}}>twitter</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
		<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<h3 class="modal-title text-center" id="exampleModalLabel">Select Your Photo</h3>
			      	</div>
				    <div class="modal-body">
				        <form method="POST" action="{{ url('uploadpic') }}" enctype="multipart/form-data">
				        	{{ csrf_field() }}
				        	<input type="file" name="img">
				        	<button type="submit" class="btn btn-success">Upload Photo</button>
				        </form>
				    </div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-danger" data-dismiss="modal">Discard</button>
			      	</div>
			    </div>
		  	</div>
		</div>

<div class="container profile-body">
	<div class="row">
		<div class="col-md-offset-1 col-md-10 col-sm-12 tab-menu-section">
			<a id="item1" class="col-sm-4 col-md-2 menu-item active-item text-center" role="button">Pet's</a>
			<a id="item2" class="col-sm-4 col-md-2 menu-item text-center" role="button">Blog's</a>
			@if(Auth::user()->id == $userId)
				<a id="item1" class="col-sm-4 col-md-2 menu-item text-center" href="{{ url('post') }}">Add Pet</a>
				<a id="item2" class="col-sm-4 col-md-2 menu-item text-center" href="{{ url('blog/post') }}">Add Article</a>
			@endif
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