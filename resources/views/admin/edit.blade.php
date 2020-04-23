@extends('layouts.app1')
@section('titulli')
    Editimi
@endsection
@section('content')

    <form method="post" action="/user/update/{{$user['id']}}" autocomplete="off">
        @csrf
        <input type="hidden" name="id" value="{{$user['id']}}">

        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="name">Emri</label>
            <div class="md:w-full px-3">
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" name="name" placeholder="Emri"
                       value="{{$user['name']}}">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2"  for="email">Email-i</label>
            <div class="mb-4">
                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" id="email" name="email" placeholder="Email"
                       value="{{$user['email']}}">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Fjalkalimi</label>
            <div class="mb-4">
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" id="password" name="password"
                       placeholder="Password">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="confirmpassword">Konfirmo fjalkalimin</label>
            <div class="mb-4">
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"  id="confirmpassword" name="confirmpassword"
                       placeholder="Confirm Password">
                @error('confirmpassword')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="flex">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">
              Perditso
            </button>
        </div>

    </form>

    <a class="bg-red-500 hover:bg-red-700 text-md-center mt-3 text-white font-bold py-2 mr-6 px-4 rounded" href="/Administration" >Kthehu</a>
    @endsection
