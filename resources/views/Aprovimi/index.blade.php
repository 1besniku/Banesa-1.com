@extends('layouts.app1')
@section('content')
    @if (session('status'))

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Informacion</p>
            <p> {{ session('status') }}</p>
        </div>

    @endif
    <table class="border-collapse w-full mt-6">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Objekti
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Statusi i Aprovimit
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Detaje
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Aprovo
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Fshi
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($property as $prop)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Objekti</span>
                    {{$prop->llojishpalljes}}
                </td>
                @if($prop->aprovimi == 1)
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Statusi i Aprovimit</span>
                        I Aprovuar
                    </td>
                @else
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Statusi i Aprovimi</span>
                        I pa Aprovuar
                    </td>
                @endif
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Detajet</span>
                    <a class="bg-teal-500 hover:bg-teal-900 text-white font-bold py-1 px-4 rounded"
                       href="/detaje/{{$prop->id}}">Detaje</a>
                </td>

                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aprovo</span>

                    <form method="post" action="/aprovim-update">
                        @csrf
                        <input type="hidden" value="{{$prop->id}} " name="id" id="id">
                        <input type="hidden" value="1" id="app" name="app">
                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-1 px-4 rounded">Aprovo
                        </button>
                    </form>

                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fshi</span>
                    <form class="form-horizontal" method="post" action="/aprovim/delete/{{$prop->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-1 px-4 rounded">Fshi</button>
                    </form>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
    {{ $property->links() }}
@endsection
