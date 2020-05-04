@extends('layouts.app2')
@section('titulli')
    Log-in
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kyqu</h5>
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="email"  class="form-control  @error('email') is-invalid @enderror"
                                name="email"
                                id="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email">
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                       name="password"
                                       required autocomplete="current-password" id ='password'
                                       placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Hyr</button>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Kyqu me Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Kyqu me Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
