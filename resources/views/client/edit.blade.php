@extends('layouts.index')

@section('page.title', 'Client')

@section('content')
    <div class="container">
        <p class="text-center text-decoration-underline fs-4 pt-3">{{__('Изменить данные клиента')}}</p>
        <form action="{{ route('client.update', $client->id) }}" method="post">
            <input type="hidden" , name="_token" , value="{{ csrf_token() }}"/>
            @method('patch')
            <div class="mb-3">
                <label for="firstName" class="form-label">Имя</label>
                <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Введите имя"
                       value="{{ $client->first_name }}">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Фамилия</label>
                <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Введите фамилию"
                       value="{{ $client->last_name }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Эл. почта</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                       value="{{ $client->email }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="+7(ХХХ)ХХХ-ХХ-ХХ"
                       value="{{ $client->phone }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Домашний адресс</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Введите адрес"
                       value="{{ $client->address }}">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Название компании</label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Введите название компании"
                       value="{{ $client->company }}">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
