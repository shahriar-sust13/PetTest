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
                        <a href="{{ route('welcome') }}">
                            <img src="{{ url('images/logo2.png') }}">
                        </a>
                    </div>
                    <div class="col-md-6 logo-text">
                        <h3>Pet World</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="navbar-container text-right">
                        <a class="text-center" href=" {{ url('home') }} ">Home</a>
                        <a class="text-center" href=" {{ url('blog/home') }} ">Blog</a>
                        @if( Auth::check() )
                            <a class="text-center user-button" role="button">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="custom-dropdown">
                                <li><a class="text-center" href="{{url('/profile/'.Auth::user()->id)}}">Profile</a></li>
                                <li><a class="text-center" href="{{url('/logout')}}">Log Out</a></li>
                            </ul>
                        @else
                            <a class="text-center" href="{{ route('login') }}">LogIn</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

</div>

<script src="{{ url('js/header.js') }}"></script>