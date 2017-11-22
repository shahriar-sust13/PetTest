
<div class="container-fluid popular-product-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1>Popular Product</h1>
			</div>
			<div class="col-md-6 col-md-offset-3 col-sm-12 text-center product-type">
				<div class="col-md-4 col-sm-4"><a id="type1" class="active-product" style="color:#E7E6E6;" role="button">Featured</a></div>
				<div class="col-md-4 col-sm-4"><a id="type2" role="button">Latest</a></div>
				<div class="col-md-4 col-sm-4"><a id="type3" role="button">Popular</a></div>
			</div>
		</div>
		<div class="row item-row">
			<div id="row1" class="col-md-12 col-sm-12 active-row">
				<div class="col-md-3 item-container text-center">
					<div id="item1" class="item-container-div">
						<img src="{{ url('images/item1.png') }}">
						<h4>Product 1 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item2" class="item-container-div">
						<img src="{{ url('images/item1.png') }}">
						<h4>Product 2 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item3" class="item-container-div">
						<img src="{{ url('images/item1.png') }}">
						<h4>Product 3 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item4" class="item-container-div">
						<img src="{{ url('images/item1.png') }}">
						<h4>Product 4 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
			</div>
			<div id="row2" class="col-md-12 col-sm-12 disable-row">
				<div class="col-md-3 item-container text-center">
					<div id="item1" class="item-container-div">
						<img src="{{ url('images/item2.png') }}">
						<h4>Item 1 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item2" class="item-container-div">
						<img src="{{ url('images/item2.png') }}">
						<h4>Item 2 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item3" class="item-container-div">
						<img src="{{ url('images/item2.png') }}">
						<h4>Item 3 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
				<div class="col-md-3 item-container text-center">
					<div id="item4" class="item-container-div">
						<img src="{{ url('images/item2.png') }}">
						<h4>Item 4 Name</h4>
						<div class="overlay"></div>
						<a href="#">BUY</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{ url('/js/welcome.js') }}" type="text/javascript"></script>