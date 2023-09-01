@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center">Список статей</h3>
        <a class='fs-3' href="{{ route('home.index') }}">Добавить статью</a>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-4">
                <a href="{{ route('post.show', $post->id )}}">{{ $post->title }}</a>
                <p>{{ $post->content }}</p>
                <span>{{ $post->is_published }} </span>
            </div>
        @endforeach

    </div>
    {{ $posts->links() }}
@endsection
