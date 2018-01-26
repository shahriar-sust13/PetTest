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
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>


    <div class="container-fluid auth-container">
        <div class="auth-overlay"></div>
        <div class="container header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-container col-md-4">
                        <a href=" {{ route('welcome') }} ">
                            <img src="{{ url('images/logo2.png') }}">
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
                        <a class="text-center" href="{{ route('login') }}">Log In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container auth-body">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="form-container">
                        <div class="auth-btn-container">
                            <a id="login-btn" class="text-center" role="button">Log In</a><a id="register-btn" class="text-center active-btn" role="button">Sign Up</a>
                        </div>
                        <form id="login-form" class="form-section disable-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control form-item text-center" id="email" name="email" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control form-item text-center" id="pwd" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </form>
                        <form id="register-form" class="form-section active-form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="text" class="form-control form-item text-center" id="name" name="name" placeholder="Your Name">
                                <input type="email" class="form-control form-item text-center" id="email" name="email" placeholder="Email">
                                <input type="password" class="form-control form-item text-center" id="pwd" placeholder="Password" name="password">
                                <input type="password" class="form-control form-item text-center" id="pwd" placeholder="Confirm Password" name="password_confirmation">
                            </div> 
                            <div class="form-group" class="col-md-offset-3 col-md-6">
                                <button type="submit" class="submit-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("footer")


    <!-- Scripts -->
    
    <script src="{{ url('js/auth.js') }}"></script>
        

</body>
</html>