
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">


	<div class="container pet-grid">
		<div class="row">

			@foreach($pets as $pet)
				<div class="col-md-3 grid-cell">
					<div class="pet-container" id="pet1">
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

		<!-- <div class="row pagination-section text-center">
			<ul class="pagination">
			    <li class="active"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
		    	<li><a href="#">5</a></li>
		  	</ul>
		</div> -->
	</div>

<script src="{{ url('/js/home.js') }}" type="text/javascript"></script>