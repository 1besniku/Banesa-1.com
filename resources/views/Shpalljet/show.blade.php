@extends('layouts.app')
@section('content')
   <h1 class="text-right"> Postuar nga: {{$user->name}}</h1>
        <h1 class="text-center font-bold text-3xl">Te dhenat</h1>



        <ul>
            <li>Prona:   {{$property->llojishpalljes}}, {{$property->lloji}}.</li>
            <li>Komuna: {{$property->komuna}}.</li>
            <li>Kati: {{$property->kati}}.</li>
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

@endsection
