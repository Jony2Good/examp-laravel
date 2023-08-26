@extends('layouts.index')

@section('page.title', $post[0]->title)


@section('content')
   <div class="card text-center" style="width: 18rem;">
       <img class="card-img-top" src="{{ $post[0]->image }}" alt="Card image cap">
      <div class="card-body">
          <h5 class="card-title">{{ $post[0]->title }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $post[0]->created_at }}</h6>
          <p class="card-text">{{ $post[0]->content }}</p>
          <a href="{{ route('post.index') }}">Вернуться назад</a>
      </div>
  </div>
@endsection
