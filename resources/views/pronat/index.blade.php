@extends('layouts.app2')
@section('titulli')
    Posto Shpallje
@endsection
@section('content')

    <div class="container">

        <div class="row mt-5">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <p >Ne linkun <b>"Posto Shpllje"</b> mund të postohen shpalljet e juaja. Ky link permban një formular qe
                    është i lehët për perdoruesit. Në rreshti e par objekti duhët
                    të zgjidhni objektin qe doni ta postoni, pas rreshtit objkti keni rreshtin <b>Lloji i Shpalljes</b>
                    tek ky rresht duhet të selektoni nese objekti i juaj është <b>Me qera apo Ne Shitje</b> .
                    Tek rreshti <b>"Kati"</b> nese objekti juaj është <b>"Banes"</b> duhet se selktoni katin ne të cilin
                    gjendet banesa,nese objekti juaj eshte <b>"Shtepi"</b> duhet te selektoni sa kat posedon shtepia
                    juaj,
                    e njejta
                    gje vlen dhe per lokalin. Tek rreshti <b>"Hapsira ne m<sup>2"</sup></b> duhet te shënohet hapsira që
                    posedon objketi juaj ne m<sup>2</sup>, <b> vrejte fusha duhet te permmban vete numer p.sh 100,200 dhe
                        jo 100<sup>2</sup>por vetem numer të thjesht</b> . Fushat tjera jan të lehta per tu plotsuar.
                    Vrejte
                    postimi juaj duhet te përmban më së paku 1 fotografi. Pasi te keni kilikuar butonin <b>Posto</b>
                    nëse gjithqka është ne rregull duhet te prisni per aprovim te shpalljes tuaj nga administratort.

                    </b>

                    </b>
                </p>

                <form class="form-group mt-5" method="post" action="/pronat-store" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="objekit">Objekti</label>
                        <div class="col-md-5">
                            <select class="form-control form-control-sm"
                                    name="objekti" id="objekit">
                                <option disabled selected>Zgjedh</option>
                                <option value="Shtepi">Shtepi</option>
                                <option value="Banes">Banes</option>
                                <option value="Lokal">Lokal</option>
                            </select>
                            @error('objekti')
                            Zgjidh njerin nga opsionet!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="lloji">LLoji i Shpalljes</label>
                        <div class="col-md-5">
                            <select class="form-control  form-control-sm" name="lloji" id="lloji">
                                <option disabled selected>Zgjedh</option>
                                <option value="Shitet">Shitet</option>
                                <option value="Me Qera">Me qera</option>
                            </select>
                            @error('lloji')
                            Zgjidh njerin nga opsionet!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="kati">Kati</label>
                        <div class="col-md-5">
                            <select class="form-control  form-control-sm" name="kati" id="kati">
                                <option disabled selected>Zgjedh</option>
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
                            @error('kati')
                            Zgjedh njerin nga opsionet!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="ngrohja">Sistemi i instaluar i
                            nxemjes</label>
                        <div class="col-md-5">
                            <select type="text" class="form-control  form-control-sm" name="ngrohja"
                                    id="ngrohja">

                                <option value="Nxemje qendrore me radiatora">Nxemje qendrore me radiatora</option>
                                <option value="Nxemje qendrore nentokesore">Nxemje qendrore nentokesore</option>
                                <option value="Nuk ka">Nuk ka</option>
                            </select>
                            @error('ngrohja')
                            Zgjedh njerin nga opsionet!
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="burimi_nxemjes">Burimi i
                            nxemjes</label>
                        <div class="col-md-5">
                            <select type="text" class="form-control  form-control-sm" name="burimi_nxemjes"
                                    id="burimi_nxemjes">
                                <option disabled selected>zgjedh</option>
                                <option value="Kallda me rryme">Kallda me rryme</option>
                                <option value="Kallda me dru/qymyr">Kallda me dru/qymyr</option>
                                <option value="Ngrohtorja e qytetit">Ngrohtorja e qytetit</option>
                                <option value="Nuk ka">Nuk ka</option>
                            </select>
                            @error('burimi_nxemjes')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="rooms">Numri i dhomave</label>
                        <div class="col-md-5">
                            <select type="text" class="form-control  form-control-sm" id="rooms" name="rooms"
                                    placeholder="Sheno Numrin e dhomave">
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
                            @error('burimi_nxemjes')
                            {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="bathroom">Numri i Banjove</label>
                        <div class="col-md-5">
                            <select type="text" class="form-control  form-control-sm" id="bathroom" name="bathroom">
                                <option disabled selected>Zgjedh</option>
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
                            Zgjedh njerin nga opsionet!
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="place">Hapsira ne
                            m<sup>2</sup></label>
                        <div class="col-md-5">
                            <input class="form-control form-control-sm"
                                   id="place" name="place" placeholder="SIPERFAQJA"
                                   @error('place') style="background-color: red" @enderror
                                   value="{{old('place')}}">
                            @error('place')
                            Fusha nuk duhet te përmbaj karaktere!
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="adresa">Adresa</label>
                        <div class="col-md-5">
                            <input class="form-control form-control-sm" id="adresa" name="adresa"
                                   placeholder="Adresa" @error('adresa') style="background-color: red" @enderror
                                   value="{{old('adresa')}}">
                            @error('adresa')
                            Provo perseri ka ndonje gabim!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="komuna">Komuna</label>
                        <div class="col-md-5">
                            <select class="form-control form-control-sm" name="komuna" id="komuna">
                                <option disabled selected>Zgjedh</option>
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
                            @error('komuna')
                            Zgjedh njerin nga opsionet
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="ballkonat">Ballkonat</label>
                        <div class="col-md-5">
                            <select class="form-control form-control-sm"
                                    name="ballkonat" id="ballkonat">
                                <option disabled selected>Zgjedh</option>
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
                                @error('ballkonat')
                                Zgjedh njerin nga opsionet
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="phone">Numri i Telefonit</label>
                        <div class="col-md-5">
                            <input class="form-control form-control-sm"
                                   id="phone" name="phone" placeholder="Numri i  Telefonit"
                                   @error('phone') style="background-color: red" @enderror
                                   value="{{old('phone')}}">
                            @error('phone')
                            Fush e Numrit të telefonit duhet të ket së paku 9 karaktere!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="price">Qmimi</label>
                        <div class="col-md-5">

                            <input class="form-control form-control-sm" id="price" name="price" placeholder="price"
                                   @error('price') style="background-color: red" @enderror
                                   value="{{old('price')}}">
                            @error('price')
                            Fusha nuk duhet te përmbaj karaktere!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="komenti">Pershkrimi</label>
                        <div class="col-md-5">

                            <textarea class="form-control form-control-sm"
                                      id="komenti" name="komenti" placeholder="Me shum te dhena"
                                      @error('komenti') style="background-color: red" @enderror
                                      value="{{old('komenti')}}" cols="10" rows="5"></textarea>
                            @error('komenti')
                            Ju lutem shkruani një tekst!
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right"></label>
                        <div class="col-md-5">
                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control form-control-sm">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right"></label>
                        <div class="col-md-5">
                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i
                                                class="glyphicon glyphicon-remove"></i>
                                            Remove
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <input type="hidden" id="lat" name="lat">
                            <input type="hidden" id="lng" name="lng">

                            <button type="submit" class="btn btn-primary mt-2">Posto</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

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
    {{--  <script type="text/javascript">

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
 --}}

@endsection
