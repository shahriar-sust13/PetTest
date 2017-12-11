<header>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/header.css') }}" rel="stylesheet">

	<!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
</header>

<div class="container-fluid header-bg">
	
		<div class="container header-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-container col-md-4">
                        <a href="">
                            <img src="{{ url('images/logo.png') }}">
                        </a>
                    </div>
                    <div class="col-md-6 logo-text">
                        <h3>Pet World</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="navbar-container text-right">
                        <a class="text-center" href="#">Home</a>
                        <a class="text-center" href="#">Blog</a>
                        <a class="text-center" href="#">QA</a>
                        <!-- <a class="text-center" methods="POST" href="{{ route('logout') }}">LogOut</a> -->
                        <a class="text-center" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>