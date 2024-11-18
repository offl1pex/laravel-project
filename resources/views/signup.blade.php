@extends('layouts.header')

@section('content')


<form action="{{route('signup')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Почта</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Номер телефона</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="full_name">
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>

@endsection