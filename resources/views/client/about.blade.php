@extends('layouts.index')

@section('page.title', $client->first_name)

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $client->first_name}} {{ $client->last_name }}</h5>
                <span class="card-subtitle mb-2 text-muted">{{ $client->created_at }}</span>
                <p class="card-text">{{ $client->email }}</p>
                <p class="card-text">{{ $client->phone }}</p>
                <p class="card-text">{{ $client->address }}</p>
                <p class="card-text">{{ $client->company }}</p>
                <a class="mb-2" href="{{ route('client.index') }}">Вернуться назад</a>
            </div>
        </div>
    </div>

@endsection
