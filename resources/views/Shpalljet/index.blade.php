@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-md-center">Shpalljet</h1>
        <h4 class="text-md-center">Cfar po Kerkoni</h4>
        <form method="post" action="/search/shpalljet">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <select class="form-control form-control-lg" name="llojishpalljes" id="llojishpalljes">
                        <option value="Shtepi">Shtepi</option>
                        <option value="Banes">Banes</option>
                        <option value="Truall">Truall</option>
                    </select>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <select class="form-control form-control-lg" name="lloji" id="lloji">
                        <option value="Shitet">Ne shitej</option>
                        <option value="Me qera">Me qera</option>

                    </select>
                </div>

            </div>

            <div class="row ">
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" name='komuna' placeholder="komuna">
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" name='qmimi' placeholder="qmimi">
                </div>

                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" name="kati" placeholder="kati">
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" name="hapsira" placeholder="hapsira">
                </div>
            </div>

            <button class="btn btn-outline-success mt-3 text-md-center">Kerko</button>

        </form>

        <div class="mt-5">
            @if(isset($pronat))
                @foreach($pronat as $pronat)

                    @if($pronat->aprovimi == 1)

                        <ul>
                            <li>
                                <a href="/detaje/{{$pronat->id}}">{{$pronat->llojishpalljes}}</a>
                                <p>{{$pronat->komenti}}</p>
                            </li>
                        </ul>
                    @endif
                @endforeach
            @endif


        </div>

        @if(isset($search))
            <a class="btn btn-outline-info" href="/Shpalljet">Faqja Kryesore</a>

        @foreach($search as $search)
            @if($search->aprovimi == 1)
           <ul>
               <li><a href="/detaje/{{$search->id}}" > {{ $search->llojishpalljes }}</a> </li>
               <p>{{ $search->komenti }}</p>
           </ul>
                @endif
        @endforeach

        @endif


    </div>
@endsection
