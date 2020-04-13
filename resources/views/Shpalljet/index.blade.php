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
                    Komuna
                            <select class="form-control form-control-lg" name="komuna" id="komuna">
                                <option value="0">Zgjedh</option>
                                <option value="Prishtin">Prishtin</option>
                                <option value="Fushë Kosovë">Fushë Kosovë </option>
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
                                <option value="Lipjan">Lipjan </option>
                                <option value="Kamenicë">Kamenicë </option>
                                <option value="Deçan">Deçan </option>
                                <option value="Kaçanik">Kaçanik </option>
                                <option value="Gjakovë">Gjakovë </option>
                                <option value="Gjilan">Gjilan </option>
                                <option value="Dragash">Dragash </option>
                                <option value="Istog">Istog </option>
                                <option value="Klinë">Klinë </option>
                                <option value="Junik">Junik </option>
                            </select>
                </div>
                <div class="col-md-6 mt-3">
                    Qmimi
                    <input type="text" class="form-control" name='qmimi' placeholder="qmimi">
                </div>

                <div class="col-md-6 mt-3">
                    Kati
                    <select class="form-control form-control-lg" name="kati" id="kati">
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
                <div class="col-md-6 mt-3">
                    Hapsira
                    <input type="text" class="form-control" name="hapsira" placeholder="hapsira">
                </div>
            </div>

            <button class="btn btn-outline-success mt-3">Kerko</button>

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
