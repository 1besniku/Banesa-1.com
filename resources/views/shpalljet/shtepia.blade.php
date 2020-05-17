@extends('layouts.app')
@section('titulli')
    Shtepit
@endsection
@section('content')
    @foreach($shtepia as $arr)
    <div class="d-flex flex-column row  flex-sm-column row">





        <div>
            <?php
            $explode = explode(',', $arr->foto)
            ?>
            <div class="d-flex section-row flex-sm-row flex-column">

                <img src="{{asset('/images/'.$explode['0'])}}" width="200" height="100" alt="logo_section">
                <div class="div-small">
                    <h5><a href="/detaje/{{$arr->id}}" id="src_home">{{$arr->llojishpalljes}}</a></h5>
                    <p>{{$arr->komenti}}</p>
                </div>

            </div>
            <hr style="width:100%;text-align:left;margin-left:0">

        </div>
    </div>
    @endforeach
    {{ $shtepia->links() }}
@endsection
@section('search')

    <div class="card text-center">

        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">
                        Banesa
                        <select type="text" class="form-control" name="lloji" id="lloji">
                            <option>Shtepi</option>
                        </select>
                        @error('lloji')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="col">
                        Statusi
                        <select type="text" class="form-control" name="statusi" id="statusi">
                            <option disabled selected>Zgjedh</option>
                            <option>Ne Shitje</option>
                            <option>Me Qera</option>
                        </select>
                        @error('statusi')
                        Zgjedh Stusin
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        Posedimi i kateve
                        <select type="text" class="form-control" name="kati" id="kati">
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
                        @error('kati')
                        Zgjedh katin
                        @enderror
                    </div>
                    <div class="col">
                        Komuna
                        <select type="text" class="form-control" name="komuna" id="komuna">
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
                        Zgjedh Komuna
                        @enderror
                    </div>

                </div>
                <button  class="btn btn-success mt-2">Kerko</button>
            </form>
        </div>

    </div>
@endsection
