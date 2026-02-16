<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Science+Gothic:wght@100..900&display=swap" rel="stylesheet">
</head>

<style>
    .logo {
        color: #FF9B00;
        font-weight: bolder;
        margin-top: 20px;
        font-size: 30px;
        font-family: "Science Gothic", sans-serif;
        text-transform: uppercase;
    }

    .line {
        height: 2px;
        background-color: #FF9B00;
        padding: 0;
    }

    .nav-bar {
        padding: 0;
        margin-top: 5px;
    }

    .nav-logo {
        font-weight: bolder;
        color: #FF9B00;
    }

    .navbar .nav-link {
        color: #FF9B00;
        font-weight: bold;
    }

    .navbar .nav-link:hover {
        color: white;
    }

    .navbar .nav-link.active {
        background-color: #FF9B00;
        color: #000;
        border-radius: 5px;
    }

    .navbar .nav-link.active:hover {
        background-color: white;
        color: #000;
        transform: scale(1.1);
        transition: 0.3s;
    }

    .fixed-nav {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #000;
        padding: 10px;
    }

    .navbar-toggler {
        background-color: transparent;
        border: 2px solid #FF9B00;
    }
</style>

<body>
    <div class="fixed-nav">
        <div class="container text-center">
            <div class="row p-0">
                <div class="col-12 logo">Dromex</div>
            </div>
        </div>

        <div class="line"></div>

        <!-- Corrected Navbar -->
        <nav class="navbar navbar-expand-lg nav-bar">
            <div class="container-fluid nav-logo">

                <img src="{{ asset('images/icon/drone.png') }}"
                     alt="drone"
                     style="width:40px; height:40px; margin-right:10px;
                     filter: invert(53%) sepia(80%) saturate(400%) hue-rotate(30deg);">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon" style="color:#FF9B00;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center;">
                    <ul class="navbar-nav" style="font-weight: bolder;">

                        <li class="nav-item">
                            <a href="{{ route('pages.home') }}"
                               class="nav-link ps-5 pe-5 {{ Request::is('/') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.shop') }}"
                               class="nav-link ps-5 pe-5 {{ Request::is('shop') ? 'active' : '' }}">
                                Shop
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.services') }}"
                               class="nav-link ps-5 pe-5 {{ Request::is('services') ? 'active' : '' }}">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.about') }}"
                               class="nav-link ps-5 pe-5 {{ Request::is('about') ? 'active' : '' }}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pages.contact') }}"
                               class="nav-link ps-5 pe-5 {{ Request::is('contact') ? 'active' : '' }}">
                                Contact Us
                            </a>
                        </li>

                        <!-- Corrected Login & Register Section -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link ps-5 pe-5" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link ps-5 pe-5" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle ps-5 pe-5"
                                   data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest

                    </ul>
                </div>

            </div>
        </nav>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
