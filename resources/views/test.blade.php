
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

    <div class="container">
    	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#photoModal">
		  	Chang
		</button>

		<!-- Modal -->
		<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<h3 class="modal-title text-center" id="exampleModalLabel">Select Your Photo</h3>
			      	</div>
				    <div class="modal-body">
				        <form method="POST" action="{{ url('') }}">
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
    </div>

</body>
</html>