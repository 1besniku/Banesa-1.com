@extends('layouts.app1')

@section('content')

    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Log in</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4  @error('email') is-invalid @enderror"
                    name="email"
                    id="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Email" />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4  @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="current-password" id ='password'
                        placeholder="Password" />

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Log in</button>
                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>
        </form>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="../login/">
                    Log in
                </a>.
            </div>
        </div>
    </div>


@endsection
