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

<nav class="flex items-center justify-between flex-wrap bg-red-500 p-6">

    <div class="block lg:hidden" id="button">
        <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div id='nav' class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            @if(Auth::user() && Auth::user()->is_admin == 1)
                <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/Administration">Administrimi</a>
                <a  class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/aprovim">Aprovo Shpalljet</a>
                <a  class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/message">Mesazhat</a>
            @endif
            @if(Auth::check())
                <a  class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/pronat">Posto Shpallje</a>
            @endif
            <a   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/Shpalljet">Shpalljet</a>

            <a   class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/">Ballina</a>
                <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="#">Rreth Nesh</a>
                <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/contact">Kontakti</a>
        </div>
        <div>
            <ul class="flex">
                @guest
                    <li class="mr-6"><a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                        <li class="mr-6"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
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
            </ul>
            @endguest
        </div>
    </div>
</nav>
<section  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    @yield('content')
</section>


<footer class="footer bg-gray-300 relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mb-2">Footer header 1</span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                    <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link 1</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Footer header 3</span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                    <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link 1</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    Product by: PAVBIT.
                </p>
            </div>
        </div>
    </div>
</footer>

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
    $(document).ready(function(){
        $("#button").click(function(){
            $("#nav").toggle();
        });
    });
</script>
</body>
</html>
