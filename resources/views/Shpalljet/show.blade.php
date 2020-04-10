@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-md-center">Te dhenat</h1>

        <p> Postuar nga: {{$user->name}}</p>

        <ul>
            <li>Prona:   {{$property->llojishpalljes}}, {{$property->lloji}}.</li>
            <li>Komuna: {{$property->komuna}}.</li>
            <li>Paracela:  {{$property->numri_parceles}}</li>
            <li>Zona Kadastrale: {{$property->zona_kadastrale}}</li>
            <li>Hapsira,Siperfaqja: {{$property->siperfaqja}}</li>
            @if(!empty($property->numri_dhomave))<li>Numri i dhomave: {{$property->numri_dhomave}}</li>@endif
            @if(!empty($property->numri_banjove))<li>Numri i banjove: {{$property->numri_banjove}}</li>@endif
            <li>Adresa: {{$property->adresa}}</li>
            <li>Qmimi: {{$property->qmimi}}</li>
            <li>Pershkrim me i detajuar : {{$property->komenti}}</li>
        </ul>


        @foreach($explode as $image)

            <img src="{{asset('/images/'. $image)}}" alt="foto" class="img-thumbnail">

        @endforeach

        <p><a class="btn btn-success" href="/Shpalljet">Kthehu</a> </p>
    </div>

@endsection
