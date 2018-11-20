<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'books') }}</title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
  <div class="flex-center position-ref full-height">

    <div class="top-right links">
      <a href="/">На главную</a>
      <a href="/">Войти</a>
      <a href="/">Зарегистрироваться</a>
    </div>

    <div class="content">
      <div class="title m-b-md">
        Книжный сайт
      </div>

      <div class="links">
        <a href="{{ route('users.list') }}">Пользователи</a>
        <a href="/books/booksList">Список книг</a>
        <a href="/news/newsList">Новости</a>
        <a href="/roles/rolesList">Роли</a>
      </div>
    </div>
  </div>
</body>
</html>
