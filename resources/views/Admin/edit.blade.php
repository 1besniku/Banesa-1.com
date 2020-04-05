@extends('layouts.app')
@section('content')
    <form class="form-horizontal" method="post" action="/user/update/{{$user['id']}}" autocomplete="off">
        @csrf
        <input type="hidden" name="id" value="{{$user['id']}}">
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="name" name="name" placeholder="Emri"
                       value="{{$user['name']}}">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
            <div class="col-md-8">
                <input type="email" class="form-control" id="email" id="email" name="email" placeholder="Email"
                       value="{{$user['email']}}">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="password">Fjalkalimi</label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="password" id="password" name="password"
                       placeholder="Password">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="confirmpassword">Konfirmo fjalkalimin</label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                       placeholder="Confirm Password">
                @error('confirmpassword')
                {{$message}}
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right"></label>
            <div class="col-md-10">
                <button type="submit" class="btn btn-primary">Perditso</button>
            </div>
        </div>
    </form>

    <a href="/Administration" class="btn btn-success">Kthehu</a>
    @endsection
