@extends('layouts.base')

@section('page.title')

@section('content')
    <section>
         <x-title>

        </x-title>
        <div class="text-center">
            <h1 class="text-center pt-3">{{__('Просмотр поста')}}</h1>
            <p class="text-success"><strong>Номер твоего поста</strong> {{$id}}</p>
            <a href="{{route('blog.index')}}">Вернуться назад</a>
        </div>

        <div class="container px-4">
            <div class="row gx-5">
                @if (empty($posts))
                    <p class="text-danger text-center">{{ __('Нет ни одного поста') }}</p>
                @else
                    @foreach($posts as $item)
                        <x-post.card :item="$item"/>
                    @endforeach
                @endif
            </div>
        </div>

    </section>





@endsection


