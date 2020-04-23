@extends('layouts.app1')
@section('titulli')
    Administrimi
    @endsection
@section('content')

    <h2 class="text-center mb-6 mt-5">Administrimi</h2>
    <form method="post" action="/user/search" autocomplete="off">
        @csrf
        <div class="block text-grey-darker text-sm font-bold mb-2">
            <input type="text" placeholder="Search" id="search" name="search"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                   aria-label="Search">
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mt-1 mr-6 px-4 rounded">Kerko
        </button>
    </form>
    <a href="/addUser" class="bg-green-500 hover:bg-blue-700 mt-6 text-white font-bold py-2 mt-1 mr-6 px-4 rounded text-center">Shto Perdoruesit</a>

    <h1 class="text-center mt-5 mb-6">Adminstratort</h1>



    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Emir
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Email-i
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Edito
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Fshi
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($useradmin as $useradmin)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emri</span>
                    {{$useradmin['name']}}
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email-i</span>
                    {{$useradmin['email']}}
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Edito</span>
                    <a href="edit/{{$useradmin['id']}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">Edito</a>
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fshi</span>

                    <form action="/user/delete/{{$useradmin['id']}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi
                        </button>
                    </form>

                </td>

            </tr>

        @endforeach
        </tbody>
    </table>



    <h1 class="text-center mt-5 mb-6">Perdoruesit</h1>
    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Emir
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Email-i
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Edito
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Fshi
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emri</span>
                    {{$user['name']}}
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email-i</span>
                    {{$user['email']}}
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Edito</span>
                    <a href="edit/{{$user['id']}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">Edito</a>
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fshi</span>

                    <form action="/user/delete/{{$user['id']}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi
                        </button>
                    </form>

                </td>

            </tr>

        @endforeach
        </tbody>
    </table>




@endsection
