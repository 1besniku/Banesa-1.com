@extends('layouts.app')
@section('titulli')
    Ballina
@endsection
@section('content')
    <div class="row">
        <div class="col-3">
            <select id="inputState" class="form-control" >
                <option  disabled selected>Objekti</option>
                <option >Shtepi</option>
                <option >Banes</option>
            </select>

        </div>
        <div class="col-3">


                <select class="form-control " name="komuna" id="inputState">
                    <option disabled selected>Qyteti</option>
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
        <div class="col-3">
            <select id="inputState" class="form-control">
                <option id="optoionState" selected>Numri Dhomave</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="col-3">
            <button class="btn btn-info"> Kerko</button>
        </div>

    </div>
    @foreach($arr as $array)
        <div class="d-flex flex-column row  flex-sm-column row">

            <div>
                <?php
                $explode = explode(',', $array->foto)
                ?>
                <div class="d-flex section-row flex-sm-row flex-column">

                    <img src="{{asset('/images/'.$explode['0'])}}" width="200" height="100" alt="logo_section">
                    <div class="div-small">
                        <h5>{{$array->llojishpalljes}}</h5>
                        <p>{{$array->komenti}}</p>

                        <a href='ballinashow/{{$array->id}}' class="btn btn-info">Detajet</a>
                    </div>

                </div>
                <hr style="width:100%;text-align:left;margin-left:0">
            </div>
        </div>
    @endforeach
    {{ $arr->links() }}
@endsection

