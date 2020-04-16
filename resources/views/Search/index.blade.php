@extends('layouts.app1')
@section('content')

{{--<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <h2 class="text-center mt-5 mb-6">Adminstrimi</h2>
        <table class="table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2">Emri</th>
                <th class="px-4 py-2">Email-i</th>
                <th class="px-4 py-2">Statusi i Adminit</th>
                <th class="px-4 py-2">Edito</th>
                <th class="px-4 py-2">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kerko as $kerko)

                <tr>

                    <th class="border px-4 py-2">{{$kerko['name']}}</th>
                    <td class="border px-4 py-2">{{$kerko['email']}}</td>
                    @if($kerko['is_admin'] == 1)
                    <td class="border px-4 py-2">Admin</td>
                    @else
                        <td class="border px-4 py-2">Perdorues i thjesht</td>
                    @endif
                    <td class="border px-4 py-2"><a href="/edit/{{$kerko['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">Edito</a></td>
                    <td class="border px-4 py-2"><form action="/user/delete/{{$kerko['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi</button>
                        </form></td>

                </tr>
            @endforeach

            </tbody>
        </table>


        <p class="mt-5"><a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 mr-6 px-4 rounded"href="/Administration">Kthehu</a> </p>
</div>--}}
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
          Status i Adminit
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
    @foreach($kerko as $kerko)
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emri</span>
                {{$kerko['name']}}
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email-i</span>
                {{$kerko['email']}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Statusi i Admnit</span>
            @if($kerko['is_admin'] == 1)
             Admin
            @else
                Perdorues i thjesht
                @endif
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Edito</span>
                <a href="/edit/{{$kerko['id']}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mr-6 px-4 rounded">Edito</a>
            </td>

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fshi</span>

                <form action="/user/delete/{{$kerko['id']}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi</button>
                </form></td>

            </td>

        </tr>

    @endforeach
    </tbody>
</table>

@endsection
