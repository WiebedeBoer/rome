<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rome</title>
		<meta name="description" content="Free browser based games, with such games as Roma and Shugo, Middle, and Three Kingdoms."/>
		<meta name="keywords" content="romegames, roma, online game, pbbg, mmo, mmorts, mmorpg, browser based game, browser game, shugo.nl, romegames.nl">
		<meta http-equiv="Content-Language" content="en-us">
		<meta name="author" content="Wiebe Eling de Boer">
		<meta name="copyright" content="2020 Wiebe Eling de Boer">
		<meta name="date" content="2020-8-13">
		<meta name="robots" content="INDEX, FOLLOW">      
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<!--app scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!--laravel app Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Styles -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!--jquery-->
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!--bootstrap-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body class="body-cards">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Rome
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
            @if (Route::has('login'))
                
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Dashboard</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
            @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>
		<!--content-->
		<div class="main-welcome">
			<div class="vh-100">
				<main class="py-4">
					<div class="content">
						<div class="title m-b-md">
						Rome
						</div>
						<div class="main-links">

                        @if (Route::has('login'))
                
                            @auth
                                <a href="{{ url('/home') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
            
                        @endif

							<a href="/forum">Forum</a>
							<a href="/news">News</a>
							<a href="/manual">Manual</a>      
						</div>  
					</div>	
				</main>
			</div>
		</div>

		
		
    </div>

</body>
</html>
