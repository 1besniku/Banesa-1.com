@extends('layouts.app')
@section('titulli')
    Ballina
@endsection
@section('content')
    <div class="card">
        <div class="card-header">{{$property->llojishpalljes}}</div>


        <div class="card-body">
            <div class="card">


                <div class="card-body">


                    <div class="row">
                        <div class="col-12">
                            <img src="/images/{{$arr}}" width="600px" height="350px">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ml-2">
                        @foreach($explode as $arr1)
                            <a href="/images/{{$arr1}}"><img src="/thumbnail/{{$arr1}}" width="200px" height="100px"
                                                             class="mt-3" class="ml-2"></a>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Banjo</h5>
                        <span style="margin-left:10px">{{$property->numri_banjove}} banjo.</span>

                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri i Dhomave</h5>
                        <span style="margin-left:10px">{{$property->numri_dhomave}} dhoma.</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Siperfaqja</h5>
                        <span>{{$property->siperfaqja}}m2.</span>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri i Kateve(kati ne te cilin gjendet)</h5>
                        <span>Kati: {{$property->kati}} </span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Numri Ballkonave</h5>
                        <span>{{$property->ballkonat}} ballkona.</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Ngrohja</h5>
                        <span> {{$property->ngrohja}}$</span>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Komuna</h5>
                        <span>{{$property->komuna}} </span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex flex-column">
                        <h5>Adresa</h5>
                        <span>{{$property->adresa}}</span>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <h5>Qmimi</h5>
                        <span> {{$property->qmimi}}$</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p>{{$property->komenti}}</p>
            </div>

        </div>
    </div>
    <div class="card-headerd">
        <a class="btn btn-outline-info mt-3" href="/">Kthehu</a>
    </div>
    @endsection
