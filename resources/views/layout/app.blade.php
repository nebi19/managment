<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{config('app.name', 'Adika Taxi Service')}}</title>        
        {{-- <link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}"> --}}
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    	@include('inc.navbar')
    	<div class="container">
 		@yield('content')
 		</div>
    </body>
</html>
