@extends('layouts.app1')
@section('content')
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <form method="post" action="/Administration-store">
            @csrf
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="name">Emri</label>
                <div class="md:w-full px-3">
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" name="name" placeholder="Emri"
                           value="{{old('name')}}">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email-i</label>
                <div class="md:w-full px-3">
                    <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" id="email" name="email" placeholder="Email">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password"> Fjalkalimi</label>
                <div class="md:w-full px-3">
                    <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" name="password" required
                           autocomplete="new-password"
                           placeholder="Password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="confirmpassword"> Konfirmo fjalkalimin</label>
                <div class="md:w-full px-3">
                    <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="confirmpassword"
                           name="confirmpassword"
                           required autocomplete="new-password" placeholder="Confirm Password">
                    @error('confirmpassword')
                    {{$message}}
                    @enderror
                </div>
            </div>


            <div class="flex">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">
                    Shto
                </button>
            </div>
        </form>
    </div>



@endsection
