@extends('layouts.app')
@section('titulli')
    Detajet
@endsection
@section('content')
   <h1 class="text-right"> Postuar nga: {{$user->name}}</h1>
        <h1 class="text-center font-bold text-3xl">Te dhenat</h1>



        <ul>
            <li>Prona:   {{$property->llojishpalljes}}, {{$property->lloji}}.</li>
            <li>Komuna: {{$property->komuna}}.</li>
            <li>Kati: {{$property->kati}}.</li>
            <li>Ballkona"  {{$property->ballkonat}}</li>
            <li>Burimi i nxemjes: {{$property->burimi_nxemjes}}</li>
            <li>Hapsira,Siperfaqja: {{$property->siperfaqja}}</li>
            <li>Numri i dhomave: {{$property->numri_dhomave}}</li>
            <li>Numri i banjove: {{$property->numri_banjove}}</li>
            <li>Adresa: {{$property->adresa}}</li>
            <li>Qmimi: {{$property->qmimi}}</li>
            <li>Pershkrim me i detajuar : {{$property->komenti}}</li>
        </ul>


       {{-- @foreach($explode as $image)

            <img src="{{asset('/images/'. $image)}}" alt="foto" class="img-thumbnail">

            <img src="{{asset('/thumbnail/'. $image)}}" alt="foto" class="img-thumbnail">

        @endforeach--}}


   <!--Carousel Wrapper-->
   <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

       <!--Controls-->
       <div class="controls-top">
           <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
           <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
       </div>
       <!--/.Controls-->

       <!--Slides-->
       <div class="carousel-inner" role="listbox">

           <!--First slide-->
           @foreach($explode as $image)
           <div class="carousel-item active">

               <div class="col-md-3 mb-3">
                   <figure class="col-md-4">
                       <a href="{{asset('/images/'. $image)}}" data-size="1600x1067">
                       <img class="img-fluid" src="{{asset('/thumbnail/'. $image)}}" alt="foto">
                       </a>
                   </figure>
               </div>

           </div>
           @endforeach
       </div>
       <!--/.Slides-->
       <p><a class="btn btn-success" href="/Shpalljet">Kthehu</a> </p>
   </div>
   <!--/.Carousel Wrapper-->
   <style>
   @media (min-width: 768px) {
   .carousel-multi-item-2 .col-md-3 {
   float: left;
   width: 25%;
   max-width: 100%; } }

   .carousel-multi-item-2 .card img {
   border-radius: 2px; }
   </style>
@endsection
