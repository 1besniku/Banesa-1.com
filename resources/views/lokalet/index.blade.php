@extends('layouts.app')
@section('titulli')
    Lokalet
@endsection
@section('search')

    <form class="form-control row" id="card">
        <h6 class="text-center">Kerko</h6>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Objkti</label>
            <div class="col-sm-8">
                <select class="form-control form-control-sm">
                    <option disabled >Zgjedh</option>
                    <option>Shtepi</option>
                    <option>Banes</option>
                    <option>Lokal</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Shpallja</label>
            <div class="col-sm-8">
                <select class="form-control form-control-sm">
                    <option disabled >Zgjedh</option>
                    <option>Ne shitje</option>
                    <option>Me qera</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label col-form-label-sm">Qmimi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label col-form-label-sm">Komuna</label>
            <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label col-form-label-sm"></label>
            <div class="col-sm-8">
                <button class="btn btn-info " >Kerko</button>
            </div>
        </div>



    </form>

@endsection
@section('content')
    @foreach($lokali as $arr)
        <div class="d-flex flex-column row  flex-sm-column row">

            <div>
                <?php
                $explode = explode(',', $arr->foto)
                ?>
                <div class="d-flex section-row flex-sm-row flex-column">

                    <img src="{{asset('/images/'.$explode['0'])}}" width="200" height="100" alt="logo_section">
                    <div class="div-small">
                        <h5>{{$arr->llojishpalljes}}</h5>
                        <p>{{$arr->komenti}}</p>
                        <a href="/lokaletshow/{{$arr->id}}" class="btn btn-info">Detajet</a>
                    </div>

                </div>
                <hr style="width:100%;text-align:left;margin-left:0">

            </div>
        </div>
    @endforeach

@endsection
