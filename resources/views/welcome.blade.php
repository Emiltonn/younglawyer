<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>YoungLawyer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/site/css/styles.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" rel="stylesheet">

    {{-- Ícone para barra do navegador --}}
    <link rel="shortcut icon" href="{{url('assets/site/img/favicon/favicon.ico')}}" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#home"><img src="{{url('assets/site/img/home/logo.png')}}" alt="logo" width="250px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hero5">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hero6">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#social_links">Social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
            </div>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a> @else
                    <a href="{{ route('login') }}">Login</a> 
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a> 
                    @endif @endauth
                </div>
                @endif
            </div>
        </nav>
    </header>

    <div class="home red-2" id="home">
        <div class="content">
            <h3 class="rellax" data-rellax-speed="3">Get expirience or even a position in the legal market working for Senior Lawyers!</h3>
            <a class="rellax button" data-rellax-speed="0" href="#footer">Sing Up <i class="fas fa-chevron-circle-right"></i></a>
        </div>
        <img class="home rellax" src="{{url('assets/site/img/home/home.png')}}" data-rellax-speed="-3">
    </div>

    <div class="about white" id="about">
        <div class="content">
            <h2 class="rellax" data-rellax-speed="1">About</h2>
            <h3 class="rellax" data-rellax-speed="0.5">Plataform that aims to help recent graduates in law to gain experience in the labor maket through services for senior lawyers or law firms.</h3>
        </div>
        <img class="background rellax" src="{{url('assets/site/img/home/background.png')}}" data-rellax-speed="-1">
        <img class="about rellax" src="{{url('assets/site/img/home/about.png')}}" data-rellax-speed="-1">
    </div>

    <div class="partners grey" id="partners">
        <div class="content">
            <h2 class="rellax" data-rellax-speed="0">Partners</h2>
            <h3 class="rellax" data-rellax-speed="0">Ours Parteners and Sponsors</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">Coluna</div>
                <div class="col">Coluna</div>
                <div class="w-100"></div>
                <div class="col">Coluna</div>
                <div class="col">Coluna</div>
            </div>
        </div>
    </div>

    <div class="social_links white" id="social_links">
        <div class="content">
            <h2 class="rellax" data-rellax-speed="1.4">Social Links</h2>
        </div>
        <a href="https://instagram.com/youngs.lawyer?igshid=osudjngidhqn" target="_blank">
            <img class="instagram rellax" src="{{url('assets/site/img/home/Instagram-Icon.png')}}" data-rellax-speed="0">
        </a>
        <a href="https://github.com/Emiltonn/younglawyer" target="_blank">
            <img class="github-icon rellax" src="{{url('assets/site/img/home/github-icon.png')}}" data-rellax-speed="0">
        </a>
        <img class="background rellax" src="{{url('assets/site/img/home/background.png')}}" data-rellax-speed="0">
        <img class="social_media rellax" src="{{url('assets/site/img/home/social_media.png')}}" data-rellax-speed="-0.3">
    </div>
    
    <div class="footer red-2" id="footer">
        <!-- Copyright -->
        <div class="content">
            <h3>Become a Young Lawyer <b>Beta User</b></h3>
            <p> © Emanuel Milton 2020 Copyright. YOUNG LAWYER</p>
            <a class="rellax button" data-rellax-speed="0" href="{{ route('register') }}">Sing Up <i class="fas fa-chevron-circle-right"></i></a>
        </div>
            <!-- Copyright -->
    </div>

    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f1ebd2af2c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.js"></script>
    <script>
        var rellax = new Rellax('.rellax')
    </script>
</body>

</html>