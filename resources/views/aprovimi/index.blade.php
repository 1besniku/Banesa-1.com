@extends('layouts.app2')
@section('titulli')
    Aprovimi
@endsection
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Objekti</th>
            <th scope="col">Statusi i Aprovimit</th>
            <th scope="col">Data</th>
            <th scope="col">Detaje</th>
            <th scope="col">Aprovo</th>
            <th scope="col">Fshi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($property as $prop)

            <th scope="row">{{$prop->llojishpalljes}}</th>
            @if($prop->aprovimi == 1)
                <th> I Aprovuar</th>
            @else
                <th>I pa Aprovuar</th>
            @endif
            <td>{{$prop->created_at}}</td>
            <td><a href="/detaje/{{$prop->id}}" class="btn btn-primary">Detajet</a></td>


            <td>
                <form method="post" action="/aprovim-update">
                    @csrf
                    <input type="hidden" value="{{$prop->id}} " name="id" id="id">
                    <input type="hidden" value="1" id="app" name="app">
                    <button class="btn btn-success">Aprovo</button>
                </form>
            </td>
            <td>
                <form class="form-horizontal" method="post" action="/aprovim/delete/{{$prop->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Fshi</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    {{ $property->links() }}
@endsection
