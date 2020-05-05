<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulli')|Banesat</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>


<body id="body">
<div class="container">
<nav>
    <div class="d-flex justify-content-around flex-sm-row flex-column  ">
        <div>
            <img src="images_theem/logo banesat.png" width="300" height="50">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
        </div>

        <ul class="nav d-flex  flex-sm-row flex-column ">
            @if(Auth::user() && Auth::user()->is_admin == 1)
                <li class="nav-item">
                    <a class="nav-link" href="/administrimi">Administrimi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aprovim">Aprovo Shpalljet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/message">Mesazhat</a>
                </li>

            @endif
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/pronat">Posto
                        Shpallje</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/">Ballina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shtepia">Shtepit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/banesa">Banesa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">Rreth
                    Nesh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="/contact">Kontakti</a>
            <li class="nav-item">
        </ul>

        <ul class="nav d-flex flex-sm-row flex-column">
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="accont">Llogaria</a>
                </li>
            @endif
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Kyqu</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Regjistrohu</a>
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
</div>

<main class="row">
    <div class="col-12">
        <div class="img" style="background-image: url('//images_theem/sallone.jpg');">
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
            <img src="images_theem/sallone.jpg" width="300px" height="600">
        </div>


        <div class="col-2"></div>


    </div>
</section>

<footer id="footer">
    <div class="row d-flex justify-content-between flex-sm-row flex-column bg-light">
        <div class="col-2">

        </div>
        <div class="col-6 logo-footer">
            <img src="images_theem/logo banesat.png" width="200" height="50" alt="logo-footer">
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
{{--<nav class="navbar navbar-expand-lg navbar-light bg-red-500 p-3">
    {{-- logo or name of project --}}
{{--  <button class="navbar-toggler" type="button" id="button1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

          @if(Auth::user() && Auth::user()->is_admin == 1)
              <li class="nav-item">
                  <a class="nav-link" href="/administrimi">Administrimi</a>
              </li>
              <li class="nav-item text-white">
                  <a class="nav-link text-white" href="/aprovim">Aprovo Shpalljet</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="/message">Mesazhat</a>
              </li>

          @endif
          @if(Auth::check())
              <li class="nav-item">
                  <a class="nav-link text-white" href="/pronat">Posto
                      Shpallje</a>
              </li>
          @endif
          <li class="nav-item">
              <a class="nav-link text-white" href="/">Ballina</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="/shpalljet">Shpalljet</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="/about">Rreth
                  Nesh</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white"
                 href="/contact">Kontakti</a>
          <li class="nav-item">

      </ul>
      <ul class="navbar-nav ml-auto">
          @if(Auth::check())
              <li class="nav-item">
                  <a class="nav-link text-white" href="/accont">Llogaria</a>
              </li>
          @endif
          @guest
              <li class="nav-item"><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
              @if (Route::has('register'))
                  <li class="nav-item"><a class="nav-link text-white"  href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @endif
          @else
              <li class="mr-6">
                  <a id="navbarDropdown" class="text-white" href="#" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="text-white" aria-labelledby="navbarDropdown">
                      <a href="{{ route('logout') }}"
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

<section class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
  @yield('content')
</section>


<footer class="page-footer font-small indigo mt-6 bg-gray-200">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

              <ul class="list-unstyled">
                  <li>
                      <a href="#!">Very long link 1</a>
                  </li>
                  <li>
                      <a href="#!">Very long link 2</a>
                  </li>
                  <li>
                      <a href="#!">Very long link 3</a>
                  </li>
                  <li>
                      <a href="#!">Very long link 4</a>
                  </li>
              </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

              <ul class="list-unstyled">
                  <li>
                      <a href="#!">Link 1</a>
                  </li>
                  <li>
                      <a href="#!">Link 2</a>
                  </li>
                  <li>
                      <a href="#!">Link 3</a>
                  </li>
                  <li>
                      <a href="#!">Link 4</a>
                  </li>
              </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

              <ul class="list-unstyled">
                  <li>
                      <a href="#!">Link 1</a>
                  </li>
                  <li>
                      <a href="#!">Link 2</a>
                  </li>
                  <li>
                      <a href="#!">Link 3</a>
                  </li>
                  <li>
                      <a href="#!">Link 4</a>
                  </li>
              </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

              <ul class="list-unstyled">
                  <li>
                      <a href="#!">Link 1</a>
                  </li>
                  <li>
                      <a href="#!">Link 2</a>
                  </li>
                  <li>
                      <a href="#!">Link 3</a>
                  </li>
                  <li>
                      <a href="#!">Link 4</a>
                  </li>
              </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
      Product: by PAVBIT
  </div>
  <!-- Copyright -->

</footer>--}}
<!-- Footer -->
</body>
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
