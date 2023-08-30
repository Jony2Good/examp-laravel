@extends('layouts.index')

@section('page.title')
    Главная страница
@endsection

@section('content')
    <h1 class="text-center pt-3">{{__('Главная страница')}}</h1>

    <form action="{{ route('post.update', $id->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="create title"
                   value="{{ $id->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Textarea</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{ $id->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" name="image" type="file" id="formFile">
        </div>
        <div class="form-group mb-3">
            <label for="category">Category</label>
            <select class="form-control" name="category_id" id="category">
                @foreach($categories as $cat)

                    <option {{ $cat->id == $id->id ? 'selected' : ''}} value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" name="tags[]" id="tags">
                @foreach($tags as $tag)
                    <option
                        @foreach($id->tags as $postTag)
                            {{ $tag->id == $postTag->id ? 'selected' : ''}}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Change</button>
    </form>
@endsection
