@extends('layouts.index')

@section('page.title', 'Client')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center">Список клиентов сайта</h3>
        <a class='fs-3' href="{{ route('home.index') }}">Добавить клиента</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Почта</th>
            <th scope="col">Телефон</th>
            <th scope="col">Адресс</th>
            <th scope="col">Компания</th>
            <th scope="col" class="text-center">Активность</th>
        </tr>
        </thead>
        <tbody>

        @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->first_name }}</td>
                <td>{{ $client->last_name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->company }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-primary me-2" type='button' href="{{ route('client.show', $client->id) }}">Посмотреть</a>
                        <a class="btn btn-warning me-2" type='button' href="{{ route('client.edit', $client->id) }}">Изменить</a>
                        <form action="{{ route('client.delete', $client->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if($clients->hasPages())
        @if($clients->hasMorePages())
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="{{ $clients->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>

                        </a>
                    </li>
                    @for($i = 1; $i <= $clients->count(); $i++)
                        <li class="page-item"><a class="page-link" href=""> {{ $i }}</a></li>
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href="{{ $clients->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                </ul>
            </nav>
        @endif
    @endif
@endsection
