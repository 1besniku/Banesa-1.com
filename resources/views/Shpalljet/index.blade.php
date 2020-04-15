@extends('layouts.app')
@section('content')
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <h3 class="text-md-center">Cfar po kerkoni</h3>
            <form class="mt-3" method="post" action="/search/shpalljet">
                @csrf
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <select
                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                            name="llojishpalljes" id="llojishpalljes">
                            <option value="Shtepi">Shtepi</option>
                            <option value="Banes">Banes</option>
                            <option value="Truall">Truall</option>
                        </select>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <select
                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                            name="lloji" id="lloji">
                            <option value="Shitet">Ne shitej</option>
                            <option value="Me qera">Me qera</option>
                        </select>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="grid-first-name">
                            Komuna
                        </label>
                        <select
                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
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

                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                            Qmimi
                        </label>
                        <input type="text"
                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name='qmimi' placeholder="qmimi">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="kati">
                            kati
                        </label>

                        <select
                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
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
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               id="hapsira">
                            Hapsira
                        </label>
                        <input type="text"
                               class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name="hapsira" placeholder="hapsira">
                    </div>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                    Kerko
                </button>
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
                <a class="btn btn-outline-info" href="/Shpalljet">Faqja Kryesore</a>

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
    </div>
@endsection
