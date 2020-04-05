@extends('layouts.app')
@section('content')
    <form method="post" action="/Administration-store">
        @csrf
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="name" name="name" placeholder="Emri"
                       value="{{old('name')}}">
                @error('name')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
            <div class="col-md-8">
                <input type="email" class="form-control" id="email" id="email" name="email" placeholder="Email">
                @error('email')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="password"> Fjalkalimi</label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="password" name="password" required
                       autocomplete="new-password"
                       placeholder="Password">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right" for="confirmpassword"> Konfirmo fjalkalimin</label>
            <div class="col-md-8">
                <input type="password" class="form-control" id="confirmpassword"
                       name="confirmpassword"
                       required autocomplete="new-password" placeholder="Confirm Password">
                @error('confirmpassword')
                {{$message}}
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right"></label>
            <div class="col-md-10">
                <button class="btn btn-info">Shto Perdoruesin</button>
            </div>
        </div>
    </form>
    </div>

    </form>
@endsection
