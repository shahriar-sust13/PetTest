
@extends('layout')

@section('content')

<link href="{{ asset('/css/common.css') }}" rel="stylesheet">
<link href="{{ asset('/css/post.css') }}" rel="stylesheet">

<div class="profile-bg"></div>	

<div class="container post-section">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="post-box">
				<form class="form-section">
                    <div class="form-group">
                        <input type="text" class="form-control form-item text-center" id="name" name="name" placeholder="Your Name">
                        <select name="" class="form-item">
							<option value="1" class="text-center">Pet Type</option>
							<option value="2" class="text-center">Dog</option>
							<option value="3" class="text-center">Cat</option>
						</select>
                        <select name="" class="form-item">
							<option value="" class="text-center">Post Type</option>
							<option value="1" class="text-center">Adoption</option>
							<option value="2" class="text-center">Sell</option>
							<option value="4" class="text-center">Story</option>
						</select>
						<input type="text" class="form-control form-item text-center" id="name" name="price" placeholder="Price">
						<textarea name="description" id="" class="form-item" placeholder="Description"></textarea>
                    </div> 
                    <div class="">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>

@endsection

