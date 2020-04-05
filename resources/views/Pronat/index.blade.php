@extends('layouts.app')
@section('content')


    <div class="container">
        <h1 class="text-md-center">Shpallje</h1>
        <form method="post" action="pronat-store" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="objekit">Objekti</label>
                <div class="col-md-6">
                    <select class="form-control form-control-lg" name="objekti" id="objekit">
                        <option value="0">Zgjedh</option>
                        <option value="Shtepi">Shtepi</option>
                        <option value="Banes">Banes</option>
                        <option value="Tok">Truall</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="lloji">LLoji i Shpalljes</label>
                <div class="col-md-6">
                    <select class="form-control form-control-lg" name="lloji" id="lloji">
                        <option value="0">Default</option>
                        <option value="Shitet">Shitet</option>
                        <option value="Me Qera">Me qera</option>

                    </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="zonakadastrale">Zona kadastrale</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="zonakadastrale" name="zonakadastrale" placeholder="Zona Kadastrale"
                           value="{{old('zonakadastrale')}}">
                    @error('zonakadastrale')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="kati">kati</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="kati" name="kati" placeholder="kati"
                           value="{{old('kati')}}">
                    @error('kati')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="ngrohja">Ngrohja</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="ngrohja" name="ngrohja" placeholder="ngrohja"
                           value="{{old('ngrohja')}}">
                    @error('ngrohja')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="numriparceles">Numri i Parceles</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="numriparceles" name="numriparceles" placeholder="Numri i Parceles"
                           value="{{old('numriparceles')}}">
                    @error('numriparceles')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="palce">Hapsira ne m<sup>2</sup></label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="place" name="place" placeholder="SIPERFAQJA"
                           value="{{old('place')}}">
                    @error('place')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="rooms">Numri i Dhomave</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="rooms" name="rooms" placeholder="Sheno Numrin e dhomave"
                           value="{{old('rooms')}}">
                    @error('rooms')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="bathroom">Numri i Banjove</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="bathroom" name="bathroom"
                           placeholder="Sheno Numrin e dhomave"
                           value="{{old('bathroom')}}">
                    @error('rooms')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="adresa">Adresa</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa"
                           value="{{old('adresa')}}">
                    @error('adresa')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="komuna">Komuna</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="komuna" name="komuna" placeholder="komuna"
                           value="{{old('komuna')}}">
                    @error('komuna')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="phone">Numri i Telefonit</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Numri i  Telefonit"
                           value="{{old('phone')}}">
                    @error('phone')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="price">Qmimi</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="price" name="price" placeholder="price"
                           value="{{old('price')}}">
                    @error('price')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" for="komenti">Me shum</label>
                <div class="col-md-6">
                <textarea type="text" class="form-control" id="komenti" name="komenti" placeholder="Me shum te dhena"
                          value="{{old('komenti')}}" cols="10" rows="5"></textarea>
                    @error('komenti')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="input-group control-group increment">
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <div class="clone hide">
                <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right"></label>
                <div class="col-md-6">
                    <button class="btn btn-success">insert</button>
                </div>

            </div>


        </form>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function () {

                $(".btn-success").click(function () {
                    var html = $(".clone").html();
                    $(".increment").after(html);
                });

                $("body").on("click", ".btn-danger", function () {
                    $(this).parents(".control-group").remove();
                });

            });

        </script>


@endsection
