@extends('layouts.index')

@section('page.title', 'Posts')

@section('content')
<h3 class="text-center">Список статей</h3>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-4">
                <a href="{{ route('post.show', $post->id )}}">{{ $post->title }}</a>
                <p>{{ $post->content }}</p>
                <span>{{ $post->is_published }} </span>
            </div>
            @endforeach
        </div>
@endsection
