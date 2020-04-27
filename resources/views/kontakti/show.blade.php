@extends('layouts.app1')
@section('titulli')
    Mesazhat
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Mbiemri</th>
                <th scope="col">Emaili</th>
                <th scope="col">Numri i Telfonit</th>
                <th scope="col">Mesazhi</th>

            </tr>
            </thead>
            <tbody>
            @foreach($message as $message)
                <tr>
                    <th scope="row"> {{$message->emri}} </th>
                    <td>{{$message->mbiemri}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->phone}}</td>
                    <td>{{$message->mesazhi}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    {{-- <table class="border-collapse w-full">
         <thead>
         <tr>
             <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                 Emir dhe Mbiemri
             </th>
             <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Emaili-i
             </th>
             <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                 Numri Telefoni
             </th>

             <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
               Mesazhi
             </th>


         </tr>
         </thead>
         <tbody>
                 @foreach($message as $message)
             <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                 <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                     <span
                         class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emri dhe Mbiemri</span>
                         {{$message->emri}} {{$message->mbiemri}}
                 </td>

                 <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                     <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email-i</span>
                         {{$message->email}}
                 </td>
                 <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                     <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Numri i Telefonit</span>
                         {{$message->phone}}
                 </td>

                 <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                     <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Mesazhi</span>
                             {{$message->mesazhi}}
                 </td>


             </tr>

     @endforeach
         </tbody>
     </table>
     --}}
@endsection
