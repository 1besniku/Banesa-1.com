@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Objekti</th>
            <th scope="col">Statusi i aprovimit</th>
            <th scope="col">Detaje</th>
            <th scope="col">Aprovo</th>
            <th scope="col">Fshi</th>

        </tr>
        </thead>
        <tbody>
        @foreach($property as $prop)
        <tr>

            <th scope="row">{{$prop->llojishpalljes}}</th>
            @if($prop->aprovimi == 1)
                <th>I Aprovuar</th>
            @else
                <th>I pa Aprovua</th>
            @endif

            <td><a class="btn btn-success" href="/detaje/{{$prop->id}}">Detaje</a></td>
            <td>
                <form method="post" action="/aprovim-update">
                    @csrf
                    <input type="hidden" value="{{$prop->id}} "name="id" id="id">
                    <input type="hidden" value="1" id="app" name="app" >
                    <button class="btn btn-info">Aprovo</button>
                </form></td>

            <td><a class="btn btn-danger" >
                    <form class="form-horizontal" method="post" action="/aprovim/delete/{{$prop->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Fshi</button>
                    </form>
                    </a></td>

        </tr>

        @endforeach
        </tbody>

    </table>
        {{ $property->links() }}
    @endsection
