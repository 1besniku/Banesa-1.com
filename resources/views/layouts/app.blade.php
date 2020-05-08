<!DOCTYPE html>

<html>
<head>

    <title>Banesat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    <link href="/css/style.css" rel="stylesheet">

</head>

<style>
    .navbar-nav {
        margin-left: 100px;
    }

    #navbar {
        margin-left: 150px;
    }

</style>
</html>
<body id="body">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/images_theem/logo banesat.png" width="300" height="50">
        <button class="navbar-toggler" type="button" id="button1" data-toggle="collapse"
                data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @if(Auth::user() && Auth::user()->is_admin == 1)
                    <li class="nav-item">
                        <a class="nav-link" id="nav" href="/administrimi">Administrimi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav" href="/aprovim">Aprovo Shpalljet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav" href="/message">Mesazhat</a>
                    </li>

                @endif
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" id="nav" href="/pronat">Posto
                            Shpallje</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/">Ballina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/shtepia">Shtepit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/banesa">Banesa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav" href="/about">RrethNesh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav"
                       href="/contact">Kontakti</a>
                </li>
            </ul>
            <ul class="navbar-nav" id="navbar">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" id="nav" href="accont">Llogaria</a>
                    </li>
                @endif
                @guest
                    <li class="nav-item"><a class="nav-link" id="nav" href="{{ route('login') }}">Kyqu</a></li>
                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" id="nav" href="{{ route('register') }}">Regjistrohu</a>
                        </li>
                    @endif
                @else
                    <li class="mr-6">
                        <a id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div aria-labelledby="navbarDropdown">
                            <a href="{{ route('logout') }}" id="routelogin"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>

                @endguest
            </ul>

        </div>
    </nav>


<main class="row">
    <div class="col-12">
        <div id="img">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>
<section id="section1">
    <div class="row d-flex ">
        <div class="col-2"></div>

        <div class="col-6">
            @yield('content')
        </div>

        <div class="col-md-2 col-sm-12">
            <img src="/images_theem/sallone.jpg" width="300px" height="600">
        </div>


        <div class="col-2"></div>


    </div>
</section>

<footer id="footer">
    <div class="row d-flex justify-content-between flex-sm-row flex-column bg-light">
        <div class="col-2">

        </div>
        <div class="col-6 logo-footer">
            <img src="/images_theem/logo banesat.png" width="200" height="50" alt="logo-footer">
            <p class="p-footer">www.Banesat.com</p>
        </div>
        <div class="col-2 span-footer">
            <span>Banesat.com All Right recived</span>
        </div>
        <div class="col-2">

        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#button1").click(function () {
            $("#navbarSupportedContent").toggle();
        });
    });
</script>
</body>
</html>

