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



                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="view">
                                        <img class="d-block w-100" id="image_galery" src="/images/{{$explode[0]}}"
                                             alt="First slide">
                                        <div class="mask rgba-black-light"></div>
                                    </div>

                                </div>
                                @foreach($explode as $arr)
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view">
                                            <img class="d-block w-100" id="image_galery"src="/images/{{$arr}}"
                                                 alt="Second slide">
                                            <div class="mask rgba-black-strong"></div>
                                        </div>

                                    </div>
                                @endforeach


                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>

                    </div>

                </div>


                <div class="row mt-3">
                <div class="col-4">
                    <div class="d-flex flex-column ">
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
