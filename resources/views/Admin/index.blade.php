@extends('layouts.app1')
@section('content')

    <h2 class="text-center mb-6 mt-5">Administrimi</h2>

    <form method="post" action="/user/search">
        @csrf
        <div class="block text-grey-darker text-sm font-bold mb-2">
            <input type="text" placeholder="Search" id="search" name="search" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                   aria-label="Search">
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-1 mr-6 px-4 rounded">Kerko
        </button>
    </form>

    <a class="bg-red-500 over:bg-red-700 text-white font-bold py-2 mt-5 mb-6 mr-6 px-4 text-center rounded"
       href="/addUser"> Shto Perdoruesit</a>

    <h2 class="text-center mt-5 mb-6">Adminstratort</h2>
    <table class="table">
        <thead>
        <tr>
            <th class="px-4 py-2">Emri</th>
            <th class="px-4 py-2">Email-i</th>
            <th class="px-4 py-2">Edito</th>
            <th class="px-4 py-2">Fshi</th>
        </tr>
        </thead>
        <tbody>

        @foreach($useradmin as $useradmin)
            <tr>

                <th class="border px-4 py-2">{{$useradmin['name']}}</th>
                <td class="border px-4 py-2">{{$useradmin['email']}}</td>

                <td class="border px-4 py-2"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded"href="/edit/{{$useradmin['id']}}" >Edito</a></td>
                <td class="border px-4 py-2">
                    <form action="/user/delete/{{$useradmin['id']}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded ">Fshi</button>
                    </form>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>



        <h2 class="text-center mt-5 mb-6">Perdoruesit e thjesht</h2>

        <table class="table">
            <thead>
            <tr>
                <th class="px-4 py-2">Emri</th>
                <th class="px-4 py-2">Email-i</th>
                <th class="px-4 py-2">Edito</th>
                <th class="px-4 py-2">Fshi</th>
            </tr>
            </thead>
            <tbody>

            @foreach($user as $user)

                <tr>
                    <th class="border px-4 py-2">{{$user['name']}}</th>
                    <td class="border px-4 py-2">{{$user['email']}}</td>

                    <td class="border px-4 py-2"><a href="/edit/{{$user['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">Edito</a></td>

                    <td class="border px-4 py-2">
                        <form action="/user/delete/{{$user['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi</button>
                        </form>
                    </td>
                </tr>
                    @endforeach

            </tbody>
        </table>






@endsection
