<html>
<head>
    <title>Laravel Authentication Demo</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="container">

        <div id="nav">
           
            <ul class="nav nav-tabs">
                <li>{{ HTML::linkRoute('home', 'Home') }}</li>
                @if(Auth::check())
                    <li>{{ HTML::linkRoute('profile', 'Profile' ) }}</li>
                    <li>{{ HTML::linkRoute('dashboard', 'Dashboard' ) }}</li>
                    <li>{{ HTML::linkRoute('logout', 'Logout ('.Auth::user()->username.')') }}</li>
                @else
                    <li>{{ HTML::linkRoute('login', 'Login') }}</li>
                @endif
            </ul>
        </div><!-- end nav -->
        <p align="right"> Current time: {{ date('F j, Y, g:i A') }}  </p>


<div style="padding: 10px">@yield('content') </div>
       
    </div><!-- end container -->
</body>
</html>
