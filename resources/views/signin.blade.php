@extends('layouts.header')

@section('content')


<form action="{{route('signin')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Авторизироваться</button>
</form>

@endsection