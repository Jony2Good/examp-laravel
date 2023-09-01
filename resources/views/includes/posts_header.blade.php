    <nav class="navbar navbar-expand-md bg-body-tertiary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}"> {{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('home.index') }}" aria-current="page"
                           href="{{route('home.index')}}">{{__('Главная')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('form.index')}}" aria-current="page"
                           href="{{route('form.index')}}">{{__('Формы ввода')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('post.index') }}"
                           href="{{ route('post.index') }}">{{__('Список статей')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('client.index') }}"
                           href="{{ route('client.index') }}">{{__('Список клиентов')}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                           href="{{ route('registration.index') }}">{{__('Регистрация')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('login.index') }}">{{__('Вход')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

