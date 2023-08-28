@extends('layouts.index')

@section('page.title', $post[0]->title)


@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post[0]->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $post[0]->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post[0]->created_at }}</h6>
                <p class="card-text">{{ $post[0]->content }}</p>
                <div class="d-flex flex-column">
                    <a class="mb-2" href="{{ route('post.index') }}">Вернуться назад</a>
                    <a class="text-warning mb-2" href="{{ route('post.edit',  $post[0]->id) }}">Изменить статью</a>
                    <form action="{{ route('post.delete',  $post[0]->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить статью</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
