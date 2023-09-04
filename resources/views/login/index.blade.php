@extends('layouts.index')
@section('page.title', 'Страница входа')
@section('content')
    <x-card>
        <x-card-container>
            <x-card-header>
                <x-card-title>
                    {{__('Вход')}}
                </x-card-title>
                <x-slot name="right">
                    <a class="reg-link link-primary" href="{{ route('user.registration') }}">{{__('Регистрация')}}</a>
                </x-slot>
            </x-card-header>
            <x-card-form action="" method="post" class="form-horizontal">
                <x-form-item>
                    <x-form-label required for="email1"> {{__('Адрес эл.почты')}}</x-form-label>
                    <x-form-input id="email1" type="email" name="email" placeholder="Эл.почта"/>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>

                <x-form-item>
                    <x-form-label required for="password1">{{__('Пароль')}}</x-form-label>
                    <x-form-input id="password1" name="password" type="password" placeholder="Пароль"/>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="remember">
                        {{ __("Запомнить меня") }}
                    </x-checkbox>
                </x-form-item>
                <div class="text-start">
                    <x-form-button>
                        {{__('Войти')}}
                    </x-form-button>
                </div>
            </x-card-form>
        </x-card-container>
    </x-card>
@endsection
