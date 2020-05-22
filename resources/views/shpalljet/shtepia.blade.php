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
                    <h5>{{$arr->llojishpalljes}}</h5>
                    <p>{{$arr->komenti}}</p>
                    <a href="/detaje/{{$arr->id}}" class="btn btn-info">Detajet</a>
                </div>

            </div>
            <hr style="width:100%;text-align:left;margin-left:0">

        </div>
    </div>
    @endforeach
    {{ $shtepia->links() }}
@endsection
