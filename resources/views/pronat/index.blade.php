@extends('layouts.app')
@section('titulli')
    Posto Shpallje
@endsection
@section('content')

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            @if (session('status'))

                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">Informacion</p>
                    <p> {{ session('status') }}</p>
                </div>

            @endif
            <h1 class="text-center mb-6 mt-6">Mbushe fromularin per te postuar shaplljen.</h1>
            <form method="post" action="pronat-store" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="objekit">Objekti</label>
                    <div class="md:w-full px-3">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="objekti" id="objekit">
                            <option value="0">Zgjedh</option>
                            <option value="Shtepi">Shtepi</option>
                            <option value="Banes">Banes</option>
                            <option value="Tok">Truall</option>
                            <option value="Lokal">Lokal</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="lloji">LLoji i Shpalljes</label>
                    <div class="md:w-full px-3">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="lloji"
                                id="lloji">
                            <option value="0">Default</option>
                            <option value="Shitet">Shitet</option>
                            <option value="Me Qera">Me qera</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="kati">kati</label>
                    <div class="md:w-full px-3">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="kati"
                                id="kati">
                            
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="ngrohja">Sistemi i instaluar i
                        nxemjes</label>
                    <div class="md:w-full px-3">

                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="ngrohja"
                                id="ngrohja">

                            <option value="Nxemje qendrore me radiatora">Nxemje qendrore me radiatora</option>
                            <option value="Nxemje qendrore nentokesore">Nxemje qendrore nentokesore</option>
                            <option value="Nuk ka">Nuk ka</option>
                        </select>
                        @error('ngrohja')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="burimi_nxemjes">Burimi i
                        nxemjes</label>
                    <div class="md:w-full px-3">

                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="burimi_nxemjes"
                                id="burimi_nxemjes">
                            <option>zgjedh</option>
                            <option value="Kallda me rryme">Kallda me rryme</option>
                            <option value="Kallda me dru/qymyr">Kallda me dru/qymyr</option>
                            <option value="Ngrohtorja e qytetit">Ngrohtorja e qytetit</option>
                            <option value="Nuk ka">Nuk ka</option>
                        </select>
                        @error('ngrohja')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="palce">Hapsira ne
                        m<sup>2</sup></label>
                    <div class="md:w-full px-3">
                        <input type="text"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                               id="place" name="place" placeholder="SIPERFAQJA"  @error('place') style="background-color: red" @enderror
                               value="{{old('place')}}">
                        @error('place')
                        Fusha nuk duhet te përmbaj karaktere!
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="rooms">Numri i Dhomave</label>
                    <div class="md:w-full px-3">
                        <select type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                id="rooms" name="rooms" placeholder="Sheno Numrin e dhomave">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6></option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>

                        @error('rooms')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="bathroom">Numri i Banjove</label>
                    <div class="md:w-full px-3">
                        <select type="text"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                id="bathroom" name="bathroom">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        @error('bathroom')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="adresa">Adresa</label>
                    <div class="md:w-full px-3">
                        <input type="text"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                               id="adresa" name="adresa" placeholder="Adresa" @error('adresa') style="background-color: red"@enderror
                               value="{{old('adresa')}}">
                        @error('adresa')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="komuna">Komuna</label>
                    <div class="md:w-full px-3">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="komuna" id="komuna">

                            <option value="Prishtin">Prishtin</option>
                            <option value="Fushë Kosovë">Fushë Kosovë</option>
                            <option value="Pej">Pej</option>
                            <option value="Prizeren">Prizeren</option>
                            <option value="Obiliq">Obiliq</option>
                            <option value="Vushtrri">Vushtrri</option>
                            <option value="Mitrovic">Mitrovic</option>
                            <option value="Skenderaj">Skenderaj</option>
                            <option value="Gllogoc">Gllogoc</option>
                            <option value="Viti">Viti</option>
                            <option value="Ferizaj">Ferizaj</option>
                            <option value="Podujev">Podujev</option>
                            <option value="Rahovec">Rahovec</option>
                            <option value="Shtime">Shtime</option>
                            <option value="Malishevë">Malishevë</option>
                            <option value="Lipjan">Lipjan</option>
                            <option value="Kamenicë">Kamenicë</option>
                            <option value="Deçan">Deçan</option>
                            <option value="Kaçanik">Kaçanik</option>
                            <option value="Gjakovë">Gjakovë</option>
                            <option value="Gjilan">Gjilan</option>
                            <option value="Dragash">Dragash</option>
                            <option value="Istog">Istog</option>
                            <option value="Klinë">Klinë</option>
                            <option value="Junik">Junik</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="Ballkonat">Numri i
                        Ballkonave</label>
                    <div class="md:w-full px-3">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                name="ballkonat" id="ballkonat">
                            <option value="0">Zgjedh</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                    </div>
                </div>


                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="phone">Numri i Telefonit</label>
                    <div class="md:w-full px-3">
                        <input type="text"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                               id="phone" name="phone" placeholder="Numri i  Telefonit" @error('phone') style="background-color: red"@enderror
                               value="{{old('phone')}}">
                        @error('phone')
                        Fush e Numrit të telefonit duhet të ket së paku 9 karaktere!
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="price">Qmimi</label>
                    <div class="md:w-full px-3">
                        <input type="text"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                               id="price" name="price" placeholder="price" @error('price') style="background-color: red"@enderror
                               value="{{old('price')}}">
                        @error('price')
                        Fusha nuk duhet te përmbaj karaktere!
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="komenti">Me shum</label>
                    <div class="md:w-full px-3">
                <textarea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                          id="komenti" name="komenti" placeholder="Me shum te dhena" @error('komenti') style="background-color: red" @enderror
                          value="{{old('komenti')}}" cols="10" rows="5"></textarea>
                        @error('komenti')
                        Ju lutem shkruani një tekst!
                        @enderror
                    </div>
                </div>
                <div class="input-group control-group increment">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add
                        </button>
                    </div>
                </div>
                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="lat" name="lat">
                <input type="hidden" id="lng" name="lng">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                    Shto
                </button>


            </form>
            <div id="map"></div>
        </div>
    </div>
    <style>
        #map {
            height: 200px; /* The height is 400 pixels */
            width: 100%;
        }
    </style>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>


        function initMap() {
            {
                var uluru = {lat: 42.667542, lng: 21.166191};

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 10,
                    center: uluru,
                    disableDefaultUI: true
                });
                map.addListener('click', function (e) {
                    placeMarkerAndPanTo(e.latLng, map);
                });
            }

            function placeMarkerAndPanTo(latLng, map) {

                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,

                });
                var lat = latLng.lat().toFixed(6);
                var lng = latLng.lng().toFixed(6);
                getCords(lat, lng)

            }

            function getCords(lat, lng) {

                // Reference input html element with id=”lat”.
                var coords_lat = document.getElementById('lat');

                // Update latitude text box.
                coords_lat.value = lat;

                // Reference input html element with id=”lng”.
                var coords_lng = document.getElementById('lng');

                // Update longitude text box.
                coords_lng.value = lng;
            }

        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUaSDlzKuCgMb6mRNXUw1Vzx7Q4kFR6Y&callback=initMap">
    </script>
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
