@extends('layouts.app1')
@section('content')

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
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
</div>

@endsection
