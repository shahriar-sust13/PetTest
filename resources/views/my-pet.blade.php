
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">


	<div class="container pet-grid">
	
		<div class="row">
			@foreach($pets as $key => $pet)
				<div class="col-md-3 grid-cell">
					<div class="pet-container" id="pet{{$key+1}}">
						<div class="cell-img text-center">
							<img src="{{ url('images/pets/'.$pet['img'].'.jpg') }}">
						</div>
						<div class="cell-text-section text-center">
							<p class="pet-name">{{ $pet['name'] }}</p>
						</div>
						<div class="overlay"></div>
						<a href="{{url('pet/'.$pet['id'])}}" class="text-center">Details</a>
					</div>
				</div>
			@endforeach
			
		</div>

		{{ $pets->links() }}

	</div>

<script src="{{ url('/js/home.js') }}" type="text/javascript"></script>