@extends('layouts.main')
@section('title','List')
@section('content')
   <div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione d'arrivo</th>
            <th scope="col">Orario partenze</th>
            <th scope="col">Orario arrivi</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Carrozze</th>
            <th scope="col">In tempo</th>
            <th scope="col">Rinviato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->company_name}}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station  }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->code_number }}</td>
                <td>{{ $train->carriages }}</td>
                <td>{{ $train->in_time ? 'In tempo' : 'In ritardo'}} </td>
                <td>{{ $train->canceled ? 'Rinviato' : 'Non Rinviato' }}</td>
                <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
        @endforeach
        </tbody>
      </table>
   </div>
   @include('includes.footer')
@endsection

