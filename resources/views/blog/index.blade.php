@extends('layouts.base')

@section('page.title')
    Наш блог
@endsection

@section('content')

    <section>
        <x-title>
            {{__('Список постов')}}
        </x-title>
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
