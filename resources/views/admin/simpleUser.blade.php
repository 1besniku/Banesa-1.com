@extends('layouts.app2')
@section('titulli')
    Perditsimi i te dhenave
@endsection
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-12">

                <h6 text align="center">Perditso Te dhenat tua</h6>
                <form class="form-horizontal" method="post" action="/privatcy/update/{{$user['id']}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$user['id']}}">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="name">Emri</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm"  id="name" name="name" placeholder="Emri"
                                   value="{{$user['name']}}">
                            @error('name')

                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="surname">Mbiemri</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm"  id="surname" name="surname" placeholder="Mbiemri"
                                   value="{{$user['surname']}}">
                            @error('surname')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="email">Email-i</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-sm"  id="email" name="email" placeholder="Email"
                                   value="{{$user['email']}}">
                            @error('emaili')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="password">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control form-control-sm"   id="password" name="password"
                                   placeholder="Password">
                            @error('password')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="confirmpassword">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control form-control-sm"   id="confirmpassword" name="confirmpassword"
                                   placeholder="Confirm Password" >
                            @error('confirmpassword')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right"></label>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Edito</button>
                        </div>
                    </div>

                </form>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                        <a class="btn btn-primary" href="/">Kthehu</a>
                    </div>

                </div>
            </div>
        </div>
@endsection
