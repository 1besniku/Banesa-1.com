@extends('layouts.app')
@section('titulli')
    Llogaria ime
@endsection
@section('content')
    @if (session('status'))

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Informacion</p>
            <p> {{ session('status') }}</p>
        </div>
    @endif

    <h3 class="text-center">Shpalljet qe keni postuar</h3>
    <table class="table table-striped mt-6 mb-8">
        <thead>
        <tr>
            <th scope="col">Shpalljet</th>
            <th scope="col">Fshi Shpalljet</th>

        </tr>
        </thead>
        <tbody>
        @foreach($accont as $name)
            <tr>
                <th scope="row"><a href="/detaje/{{$name->id}}">{{$name->llojishpalljes}}</a></th>
                <td>
                    <form action="llogaria/delete/{{$name->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 mr-6 px-4 rounded">Fshi
                            Shpalljen
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
