@extends('layouts.app')
@section('content')
    @if (session('status'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <p class="font-bold">Informacion</p>
        <p> {{ session('status') }}</p>
    </div>
    @endif

    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
               Shpalljet
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Fshi Shpalljen
            </th>

        </tr>
        </thead>
        <tbody>
       @foreach($accont as $name)


            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Shpallajet</span>
                    <a href="/detaje/{{$name->id}}">{{$name->llojishpalljes}}</a>

                </td>


                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Fshi Shpalljen</span>

                    <form action="llogaria/delete/{{$name->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi Shpalljen</button>
                    </form>

                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
    @endsection
