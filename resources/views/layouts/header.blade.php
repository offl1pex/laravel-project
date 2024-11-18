<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Главная</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('show_signin')}}">Войти</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('show_signup')}}">Зарегистрироваться</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route(name: 'application')}}">Заявки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('personal_account')}}">Личный кабинет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Выйти</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
@yield('content')