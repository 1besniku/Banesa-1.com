@extends('layouts.app1')
@section('titulli')
    Editimi
@endsection
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-12">

                <h1 text align="center">Formulari</h1>
                <form class="form-horizontal" method="post" action="/user/update/{{$user['id']}}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id" value="{{$user['id']}}">

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"  id="name" name="name" placeholder="Emri"
                                   value="{{$user['name']}}">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="surname">Mbiemri</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"  id="name" name="surname" placeholder="Mbiemri"
                                   value="{{$user['surname']}}">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"  id="email" name="email" placeholder="Email"
                                   value="{{$user['email']}}">
                            @error('emaili')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="password">Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="email"  id="password" name="password"
                                   placeholder="Password">
                            @error('password')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="confirmpassword">Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control"   id="confirmpassword" name="confirmpassword"
                                   placeholder="Confirm Password" >
                            @error('confirmpassword')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">Edito</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    @endsection
