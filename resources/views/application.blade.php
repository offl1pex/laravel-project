@extends('layouts.header')

@section('content')
    <form action="{{route('application_add')}}">
        @csrf
        <select name="service_type">
            <option value="Ковры"></option>
            <option value="Диваны"></option>
            <option value="Кровати"></option>
        </select>
        <input type="datetime-local" name="date_time">
        <input type="text" name="address">

        <input type="submit" value="Создать">
    </form>
@endsection