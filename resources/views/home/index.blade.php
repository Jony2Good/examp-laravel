@extends('layouts.index')

@section('page.title')
    Главная страница
@endsection

@section('content')
    <h1 class="text-center p-3">{{__('Главная страница')}}</h1>
    <div class="container">
        <img src="{{ asset('assets/img/test.jpg') }}" class="img" alt="Responsive image">
    </div>

@endsection



