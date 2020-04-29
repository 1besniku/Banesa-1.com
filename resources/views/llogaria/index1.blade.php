@extends('layouts.app')
@section('titulli')
    Llogaria ime
@endsection
@section('content')
    <div class="card text-center">
        <div class="card-header">
            Informacion
        </div>
        <div class="card-body">
            <h5 class="card-title">Ju nuk keni shpallje te postuara</h5>
            <p class="card-text">Për të postuar shpallje klikoni butonin</p>
            <a href="/pronat" class="btn btn-primary">Posto Shpallje</a>
        </div>
        <div class="card-footer text-muted">
           Product: by Pavbit
        </div>
    </div>
    @endsection
