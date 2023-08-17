@extends('layouts.base')

@section('page.title')
    Страница поста
@endsection

@section('content')

    <div class="text-center">
        <h1 class="text-center pt-3">{{__('Просмотр поста')}}</h1>
        <p class="text-success"><strong>Номер твоего поста</strong> {{$id}}</p>
        <a href="{{route('blog.index')}}">Вернуться назад</a>
    </div>

@endsection


