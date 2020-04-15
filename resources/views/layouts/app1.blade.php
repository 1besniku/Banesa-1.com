<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Banesat</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7135c7649e.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<header class="bg-red-600 flex felx-row p-6 dip justify-between">
    <nav>
        <ul class="flex">
            @if(Auth::user() && Auth::user()->is_admin == 1)
                <li class="mr-6"><a class="text-white" href="/Administration">Administrimi</a></li>
                <li class="mr-6"><a class="text-white" href="/aprovim">Aprovo Shpalljet</a></li>
            @endif
            @if(Auth::check())
                <li class="mr-6"><a class="text-white" href="/pronat">Posto Shpallje</a></li>
            @endif
                <li class="mr-6"><a class="text-white" href="/Shpalljet">Shpalljet</a></li>
        </ul>
    </nav>
    <div>
        <ul class="flex">
            @guest
                <li class="mr-6"><a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                    <li class="mr-6"><a class="text-white" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else
                <li class="mr-6">
                    <a id="navbarDropdown" class="text-white" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="text-white" aria-labelledby="navbarDropdown">
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
        </ul>
        @endguest
    </div>
    </nav>

</header>
<section  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    @yield('content')
</section>
<footer class="bg-gray-200 p-6 py-40 ">
    <div class="flex">
        <div class="p-6 mr-12 w-1/2 text-center">
            <h4 class="mb-6">Sponsoret</h4>
            <p>Pavbit</p>
            <p>Innovation Center Kosova</p>
            <p>Akademia Virutuale</p>
            <p>Kolegji Universum</p>
        </div>
        <div class="p-6 mr-12 w-1/2 text-center">
            <h4 class="mb-6">Info</h4>
            <p>info@banesat.com</p>
            <p>hr@banesat.com</p>
        </div>
        <div class="p-6 mr-12 w-1/2 text-center">
            <h4 class="mb-6">Kontakti</h4>
            <p>+38344411222</p>
            <p>+38344221222</p>
            <p>+38344216222</p>
            <p>+38344411245</p>
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
</body>
</html>
