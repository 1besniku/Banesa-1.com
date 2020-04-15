@extends('layouts.app1')

@section('content')

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Regjistrohu</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input
                        type="text"
                        id="name"
                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror " name ='name' value="{{ old('name')}}" required autocomplete="name" autofocus
                        placeholder="Emri" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email"
                        name="email"
                        id="email"
                        placeholder="Email-i" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4  @error('password') is-invalid @enderror"
                        name="password"
                        id="password"
                        required autocomplete="new-password"
                        placeholder="Password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password_confirmation" required autocomplete="new-password"

                        id="password-confirm"
                        placeholder="Konfrmimi i Passwordit" />

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Regjistrohu</button>

                  <!--  <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>-->

                </form>
            </div>
        </div>

@endsection
