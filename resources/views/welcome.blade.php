<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet World</title>
    <!-- <base href="http://localhost/PetTest/public/"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500, 300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>


    <div class="container-fluid welcome-container">
        <div class="container header-section">
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
                        <a class="text-center" href="{{ url('/home') }}">Home</a>
                        <a class="text-center" href="#">Blog</a>
                        <a class="text-center" href="#">QA</a>
                        <a class="text-center" href="#">LogIn</a>
                        <a class="text-center" href="#">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container welcome-section">
            <h3 class="text-center welcome-title">Surround your children with animals, for they are the teachers with purity of heart</h3>
            <p class="text-center">
                Do You Like to have a Pet?
            </p>
            <div class="row">
                <div class="col-md-offset-4 col-md-4 welcome-btn-container">
                    <a href="{{ url('/home') }}"" class="welcome-btn text-center">Visit Home</a>
                </div>
            </div>
        </div>
    </div>

    @include('popular-product')

    @include('pet-quotes')

    @include('blog-panel')


    <!-- Scripts -->
    <!--<script src="{{ url('js/welcome.js') }}"></script> -->
        

</body>
</html>