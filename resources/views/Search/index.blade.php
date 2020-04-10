@extends('layouts.app')
@section('content')
    <div>


        </form>
        <h2 class="text-md-center">Administratort</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Email-i</th>
                <th scope="col">Edito</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kerko as $kerko)

                <tr>

                    <th cope="row">{{$kerko['name']}}</th>
                    <td>{{$kerko['email']}}</td>

                    <td><a href="/edit/{{$kerko['id']}}" class="btn btn-info">Edito</a></td>
                    <td><form action="/user/delete/{{$kerko['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi</button>
                        </form></td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


    <p><a class="btn btn-success" href="/Administration">Kthehu</a> </p>

    </div>
@endsection
