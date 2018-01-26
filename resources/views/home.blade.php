
@extends('layout')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">

<div class="container-fluid home-body">
	<div class="container search-section">
		<form class="form-section" method="POST" action="{{ route('rHome') }}">
		{{ csrf_field() }}
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
		</form>
	</div>
	<div class="container pet-grid">
		<div class="row">
			@foreach($pets as $key => $pet)
				@if(($ctg != -1 && $pet['ctg'] != $ctg) || ($type != -1 && $pet['petType'] != $type))

				@else
				<div class="col-md-3 grid-cell">
					<div class="pet-container" id="pet{{$key+1}}">
						<div class="cell-img text-center">
							<img src="{{ url('images/pets/'.$pet['img'].'.jpg') }}">
						</div>
						<div class="cell-text-section text-center">
							<p class="pet-name">{{ $pet['name'] }}</p>
							@if($pet['ctg'] == 2)
								<p class="pet-tag"><span class="label label-success">ADOPTION</span></p>

							@elseif($pet['ctg'] == 3)
								<p class="pet-tag"><span class="label label-success">{{ $pet['dam'] }} TK</span></p>

							@else
								<p class="pet-tag"><span class="label label-success">STORY</span></p>
							@endif
						</div>
						<div class="overlay"></div>
						<a href="{{ url('pet/'.$pet['id']) }}" class="text-center">Details</a>
					</div>
				</div>
				@endif
			@endforeach
		</div>
		{{ $pets->links() }}
	</div>

</div>
<script src="{{ url('/js/home.js') }}" type="text/javascript"></script>

@endsection