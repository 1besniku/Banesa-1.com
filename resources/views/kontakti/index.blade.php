@extends('layouts.app')
@section('titulli')
    Konatakti
@endsection
@section('content')
    <div class="container mt-6 mb-8">

    <form method="post" action="/contact-store" autocomplete="off">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="emri">Emri</label>
                <input type="text" class="form-control" id="emri" name='emri'  placeholder="Emri">
                @error('emri')
                {{$message}}
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="mbiemri">Mbiemri</label>
                <input type="text" class="form-control" id="mbiemri" name="mbiemri"  placeholder="Mbiemri">
                @error('mbiemri')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-row mt-6">
            <div class="form-group col-md-6">
                <label for="emaili">Email</label>
                <input type="email" class="form-control" id="emaili" name='emaili' placeholder="Email-i">
                @error('emaili')
                {{$message}}
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Numri i Telefonit</label>
                <input type="text" class="form-control" id="phone" name="phone"  placeholder="Numri i Telefonit">
                @error('phone')
                {{$message}}
                @enderror
            </div>
        </div>

        <div class="form-group mt-6">
            <label for="inputAddress2">Mesazhi</label>
            <textarea  class="form-control"  id="mesazhi" name="mesazhi" placeholder="mesazhi" cols="10" rows="5"></textarea>
            @error('mesazhi')
            {{$message}}
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Dergo</button>
    </form>

    </div>
  {{-- <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mt-6 mb-24">
        @if (session('status'))

            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">Informacion</p>
                <p> {{ session('status') }}</p>
            </div>

        @endif
        <p class="text-center font-bold text-black mb-8 mt-3">Mos hezitoni na knotaktoni</p>
        <form method="post" action="/contact-store" autocomplete="of">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="emri">
                            Emri
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="emri" name='emri' type="text" placeholder="Emri">
                        @error('emri')
                        {{$message}}
                        @enderror
                        <div>

                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="mbiemri">
                            Mbiemri
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="mbiemri" name="mbiemri" type="text" placeholder="Mbiemri">
                        @error('mbiemri')
                        {{$message}}
                        @enderror

                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="emaili">
                            Email-i
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="emaili" name='emaili' type="email" placeholder="Email-i">
                        @error('emaili')
                        {{$message}}
                        @enderror
                        <div>

                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="phone">
                            Numri Telefonit
                        </label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                               id="phone" name="phone" type="text" placeholder="Numri i Telefonit">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </div>
                </div>


                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="mesazhi">
                            Mesazhi
                        </label>
                        <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                                  id="mesazhi" name="mesazhi" placeholder="mesazhi" cols="10" rows="5"></textarea>
                        @error('mesazhi')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="-mx-3 md:flex mt-2">
                    <div class="md:w-full px-3">
                        <button
                            class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                            Dergo
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>--}}

@endsection
