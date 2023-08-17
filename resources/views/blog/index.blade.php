@extends('layouts.base')

@section('page.title')
    Наш блог
@endsection

@section('content')
    <h1 class="text-center pt-3">{{__('Список постов')}}</h1>

    <ul class="list-group">
        @if (empty($posts))
            <p class="text-danger text-center">Нет ни одного поста</p>
        @else
            @foreach($posts as $item)
                <li class="list-group-item">
                    <h5><a href="{{route('blog.show', $item->id)}}">{{$item->author}}</a></h5>
                    <p>{{$item->content}}</p>
                    <span>{{$item->id}}</span>
                </li>
            @endforeach
        @endif
    </ul>

@endsection
