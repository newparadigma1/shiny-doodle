@extends('layouts.app')
@section('content')
  <div class="panel panel-flat">
    <div class="panel-heading">
      <h5 class="panel-title">Новости</h5>
    </div>
    <div class="panel-body">
      Таблица
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Время добавления</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ($users as $key => $user)
              <tr>
                <td colspan="4"><a href="{{ route('users.profile', $user->id) }}">{{ $user->name }}</a></td>
              </tr> --}}
              @foreach ($news as $new)

                <tr>
                  <td>{{$new->id}}</td>
                  <td>{{$new->title}}</td>
                  <td>{{$new->text}}</td>
                  <td>{{$new->created_at}}</td>
                </tr>
                <tr>
                  <td>{{ $new->user->name }}</td>
                </tr>
          @endforeach
        </tbody>
      </table>
          <a href="{{ route('news.newNews')}}">Создать новость</a>
    </div>
  </div>
@endsection
