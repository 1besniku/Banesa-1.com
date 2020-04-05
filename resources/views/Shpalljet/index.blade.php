@extends('layouts.app')
@section('content')
    <div class="container">
    <h1 class="text-md-center">Shpalljet</h1>

    @foreach($pronat as $pronat)

        @if($pronat->aprovimi == 1)

        <ul>
            <li>
                <a href="/detaje/{{$pronat->id}}">{{$pronat->llojishpalljes}}</a>
                <p>{{$pronat->komenti}}</p>
            </li>
        </ul>





        @endif
    @endforeach
    </div>
@endsection
