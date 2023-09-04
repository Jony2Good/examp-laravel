@extends('layouts.index')
@section('page.title', 'Страница регистрации')
@section('content')
    <x-card>
        <x-card-container>
            <x-card-header>
                <x-card-title>
                    {{__('Регистрация')}}
                </x-card-title>
                <x-slot name="right">
                    <a class="reg-link link-primary" href="{{ route('user.login') }}">{{ __('Вход') }}</a>
                </x-slot>
            </x-card-header>
            <x-card-form action="{{ route('user.registration') }}" method="post" class="form-horizontal">
                <x-form-item>
                    <x-form-label required for="email1"> {{__('Адрес эл.почты')}}</x-form-label>
                    <x-form-input id="email1" type="email" placeholder="эл.почта" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <x-form-label required for="name"> {{__('Логин')}}</x-form-label>
                    <x-form-input id="name" type="name" name="name" placeholder="логин"/>
                    @error('login')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <x-form-label required for="password1">{{__('Пароль')}}</x-form-label>
                    <x-form-input  id="password1" type="password" name="password" placeholder="пароль"/>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <x-form-label required for="password_confirmation">{{__('Подтверждение пароля')}}</x-form-label>
                    <x-form-input id="password_confirmation" type="password" name="password_confirmation" placeholder="подтверждение пароль"/>
                    @error('password_confirm')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </x-form-item>
                <x-form-item>
                    <div class="form-check">
                        <input id="privacy" name="privacy" type="checkbox" class="form-check-input">
                        <label for="privacy" class="form-check-label h6">{{__('Я соглашаюсь с ')}}<a
                                href="">{{__('условиями')}}</a> {{__('и')}} <a
                                href="">{{__('приватной политикой сайта')}}</a></label>
                    </div>
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
