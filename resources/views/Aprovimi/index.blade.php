@extends('layouts.app1')
@section('content')
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <table class="table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2">Objekti</th>
                <th class="px-4 py-2">Statusi i aprovimit</th>
                <th class="px-4 py-2">Detaje</th>
                <th class="px-4 py-2">Aprovo</th>
                <th class="px-4 py-2">Fshi</th>

            </tr>
            </thead>
            <tbody>
            @foreach($property as $prop)
                <tr>

                    <th class="border px-4 py-2">{{$prop->llojishpalljes}}</th>
                    @if($prop->aprovimi == 1)
                        <th class="border px-4 py-2">I Aprovuar</th>
                    @else
                        <th class="border px-4 py-2">I pa Aprovua</th>
                    @endif

                    <td class="border px-4 py-2"><a class="bg-teal-500 hover:bg-teal-900 text-white font-bold py-1 px-4 rounded" href="/detaje/{{$prop->id}}">Detaje</a></td>
                    <td class="border px-4 py-2">
                        <form method="post" action="/aprovim-update">
                            @csrf
                            <input type="hidden" value="{{$prop->id}} " name="id" id="id">
                            <input type="hidden" value="1" id="app" name="app">
                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-1 px-4 rounded">Aprovo</button>
                        </form>
                    </td>

                    <td class="border px-4 py-2"><a class="btn btn-danger">
                            <form class="form-horizontal" method="post" action="/aprovim/delete/{{$prop->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-1 px-4 rounded">Fshi</button>
                            </form>
                        </a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $property->links() }}
    </div>
@endsection
