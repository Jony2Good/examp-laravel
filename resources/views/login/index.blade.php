@extends('layouts.auth')
@section('page.title', 'Страница входа')
@section('content.auth')
    <x-card>
        <x-card-container>
            <x-card-header>
                <x-card-title>
                    {{__('Вход')}}
                </x-card-title>
                <ul class="social-links text-center">
                    <li><a href=""><i class="fab fa-google"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                </ul>
            </x-card-header>
            <x-card-form action="{{ route('login.store') }}" method="post" class="form-horizontal">
                   <x-form-item>
                    <x-form-label required for="email1"> {{__('Адресс эл.почты')}}</x-form-label>
                    <x-form-input id="email1" type="email" placeholder="Эл.почта"/>
                </x-form-item>

                <x-form-item>
                    <x-form-label required for="password1">{{__('Пароль')}}</x-form-label>
                    <x-form-input id="password1" type="password" placeholder="Пароль"/>
                </x-form-item>

                <x-form-item>
                   <x-checkbox name="remember">
                        {{ __("Запомнить меня") }}
                    </x-checkbox>
                </x-form-item>
                <div class="text-center">
                    <x-form-button>
                        {{__('Войти')}}
                    </x-form-button>
                </div>
            </x-card-form>
        </x-card-container>
    </x-card>
@endsection
