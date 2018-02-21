<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{url('js/jquery-3.2.1.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

        <title>Laravel</title>

        <!-- Fonts -->




        <!-- Styles -->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Yathra</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </nav>

    </body>
</html>
