<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body id="bgTextColor">
<header>
    @include('header')
</header>
	<div class="container">
    	@yield('content')
	</div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
