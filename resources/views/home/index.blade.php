@extends('layouts.index')

@section('page.title')
    Главная страница
@endsection

@section('content')
    <h1 class="text-center p-3">{{__('Главная страница')}}</h1>
    <div class="container">
        <p class="text-center text-decoration-underline fs-4 p-3">{{__('Добавить статью')}}</p>
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" , name="_token" , value="{{ csrf_token() }}"/>
            @method('post')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="create title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Textarea</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" name="image" type="file" id="formFile">
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



