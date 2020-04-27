@extends('layouts.app')
@section('titulli')
    Shpalljet
@endsection
@section('content')

<div class="container mt-10">
    <h3 class="text-center">Cfar po kerkoni</h3>
    <form method="post" action="/search/shpalljet" autocomplete="off">
        @csrf

        <div class="form-group">
            <label for="llojishpalljes"></label>
            <select  class="form-control" name="llojishpalljes" id="llojishpalljes">
                <option value="Shtepi">Shtepi</option>
                <option value="Banes">Banes</option>
                <option value="Truall">Truall</option>
                <option value="Lokal">Lokal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lloji"></label>
            <select type="text" class="form-control" name="lloji" id="lloji">
                <option value="Shitet">Ne shitej</option>
                <option value="Me qera">Me qera</option>
            </select>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="komuna"> Komuna</label>
                <select class="form-control"
                    name="komuna" id="komuna">
                    <option value="0">Zgjedh</option>
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

            <div class="form-group col-md-6">
                <label for="qmimi">State</label>
               <input class="form-control"type="text" name='qmimi' placeholder="qmimi">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="komuna"> Kati</label>
                <select class="form-control"
                        name="kati" id="kati">
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

            <div class="form-group col-md-6">
                <label for="hapsira">Hapsira</label>
                <input class="form-control"type="text" name="hapsira" id="hapsira" placeholder="hapsira">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Kerko</button>
    </form>
    <div class="mt-5">
        @if(isset($pronat))
            @foreach($pronat as $pronat)

                @if($pronat->aprovimi == 1)
                    <div class="mr-6">
                        <ul class="mt-3">
                            <li>
                                <a class="font-bold"
                                   href="/detaje/{{$pronat->id}}">{{$pronat->llojishpalljes}} </a>

                                <p class="mt-2 ">{{$pronat->komenti}}</p>

                            </li>
                        </ul>
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    @if(isset($search))
        <a class="btn btn-outline-info" href="/shpalljet">Faqja Kryesore</a>

        @foreach($search as $search)
            @if($search->aprovimi == 1)
                <div class="mr-6">
                    <ul class="mt-3">
                        <a class="font-bold"
                           href="/detaje/{{$search->id}}"> {{ $search->llojishpalljes }}</a> </li>

                        <p class="mt-2 ">{{ $search->komenti }}</p>
                    </ul>
                </div>
            @endif
        @endforeach

    @endif
</div>


@endsection
