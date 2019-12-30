<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel'</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    

    <!-- Styles -->
    
</head>
<body>
    

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="logout">
    </form>
</div>                  
                            
</body>
</html>
