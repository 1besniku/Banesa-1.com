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
    <div id="map" class="mt-2"></div>
@endsection
    <style>
        #map {
            height: 200px; /* The height is 400 pixels */
            width: 100%;
        }
    </style>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>


        function initMap() {
            // The location of Uluru
            var uluru = {lat: 42.6374, lng: 21.0931};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 8, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }





    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUaSDlzKuCgMb6mRNXUw1Vzx7Q4kFR6Y&callback=initMap">
    </script>


