
@extends('layout')

@section('content')

<link href="{{ asset('/css/common.css') }}" rel="stylesheet">
<link href="{{ asset('/css/post.css') }}" rel="stylesheet">

@include('font')

<div class="profile-bg"></div>	

<div class="container post-section">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="post-box">
				<form class="form-section" enctype="multipart/form-data" method="POST" action="{{ route('postAdd') }}">
					{{ csrf_field() }}

					<div class="info-item">
						<h5>Pet Name</h5>
						<input type="text" class="info-input" id="name" name="title">
					</div>

					<div class="info-item">
						<h5>Pet Type</h5>
						<select name="petType" class="info-input">
							<option value="1" class="text-center">Pet Type</option>
							<option value="2" class="text-center">Dog</option>
							<option value="3" class="text-center">Cat</option>
						</select>
					</div>

					<div class="info-item">
						<h5>Post Type</h5>
						<select name="postType" class="info-input">
							<option value="1" class="text-center">Post Type</option>
							<option value="2" class="text-center">Adoption</option>
							<option value="3" class="text-center">Sell</option>
							<option value="4" class="text-center">Story</option>
						</select>
					</div>

                   	<div class="info-item">
						<h5>Price (Write 0 if it is not for Sell)</h5>
						<input type="number" class="info-input" id="name" name="price">
					</div>

					<div class="info-item">
						<h5>Description</h5>
						<textarea name="description" id="" class="description-text" placeholder="Start Here..." rows="5" cols="100"></textarea>
					</div>

					<div class="info-item">
						<h5>Image</h5>
						<input type="file" name="img">
					</div>
                    
					<div class="info-item text-center">
						<button type="submit" class="article-submit-btn">Submit</button>
					</div>
                   
                </form>
			</div>
		</div>
	</div>
</div>

@endsection

