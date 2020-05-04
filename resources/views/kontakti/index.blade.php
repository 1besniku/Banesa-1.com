@extends('layouts.app')
@section('titulli')
    Konatakti
@endsection
@section('content')
    <div class="card text-center">
        <div class="card-header">
            Kontakto
        </div>
        <div class="card-body">
            <form method="post" action="/contact-store" autocomplete="off">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="emri">Emri</label>
                        <input type="text" class="form-control" id="emri" name='emri' placeholder="Emri">
                        @error('emri')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mbiemri">Mbiemri</label>
                        <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri">
                        @error('mbiemri')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-row mt-6">
                    <div class="form-group col-md-6">
                        <label for="emaili">Email</label>
                        <input type="email" class="form-control" id="emaili" name='emaili' placeholder="Email-i">
                        @error('emaili')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Numri i Telefonit</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                               placeholder="Numri i Telefonit">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="form-group mt-6">
                    <label for="inputAddress2">Mesazhi</label>
                    <textarea class="form-control" id="mesazhi" name="mesazhi" placeholder="mesazhi" cols="10"
                              rows="5"></textarea>
                    @error('mesazhi')
                    {{$message}}
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Dergo</button>
            </form>
        </div>

    </div>




@endsection
