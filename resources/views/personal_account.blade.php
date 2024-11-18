@extends('layouts.header')

@section('content')
    <div class = "container" style="display: flex; flex-direction: row; justify-content: space-around;">
        @foreach($application as $i) 
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Запрос на чистку - {{$i -> service_type}}</h5>
            <p class="card-text">Дата - {{$i -> date_time}}</p>
            <p class="card-text">Адрес - {{$i -> address}}</p>
            <p class="card-text">Статус - {{$i -> status}}</p>
        </div>
        </div>
        @endforeach
    </div>
@endsection