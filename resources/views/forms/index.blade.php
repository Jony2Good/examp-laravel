@extends('layouts.index')

@section('page.title')
    Формы
@endsection

@section('content')
    <h1 class="text-center p-3">{{__('Сраница с формами ввода')}}</h1>
    <div class="container">
        <p class="text-center text-decoration-underline fs-4 p-3">{{__('Добавить статью')}}</p>
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" , name="_token" , value="{{ csrf_token() }}"/>
            @method('post')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="create title"
                       value="{{ old('title') }}">
                @error('title')
                <div class="py-1">
                    <p class="text-danger mb-0">{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Textarea</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3">{{ old('content') }}</textarea>
                @error('content')
                <div class="py-1">
                    <p class="text-danger mb-0">{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="form-control" name="category_id" id="category">
                    @foreach($categories as $cat)
                        <option {{ old('category_id') == $cat->id ? 'selected' : ''}} value="{{ $cat->id }}">{{ $cat->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" name="tags[]" id="tags">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

    <div class="container">
        <p class="text-center text-decoration-underline fs-4 pt-3">{{__('Добавить клиента')}}</p>
        <form action="{{ route('client.store') }}" method="post">
            <input type="hidden" , name="_token" , value="{{ csrf_token() }}"/>
            @method('post')
            <div class="mb-3">
                <label for="firstName" class="form-label">Имя</label>
                <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Введите имя"
                >
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Введите фамилию"
                >
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Эл. почта</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="+7(ХХХ)ХХХ-ХХ-ХХ"
                >
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Домашний адресс</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Введите адрес"
                >
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Название компании</label>
                <input type="text" name="company" class="form-control" id="company"
                       placeholder="Введите название компании">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>

@endsection



