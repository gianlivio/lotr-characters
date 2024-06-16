@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Dettagli del Personaggio</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $character->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Razza:</strong> {{ $character->race }}</p>
                <p><strong>Nascita:</strong> {{ $character->birth }}</p>
                <p><strong>Morte:</strong> {{ $character->death }}</p>
                <p><strong>Regno:</strong> {{ $character->realm }}</p>
                <p><strong>Wiki:</strong> <a href="{{ $character->wikiUrl }}" target="_blank">{{ $character->wikiUrl }}</a></p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('characters.index') }}" class="btn btn-primary">Torna alla Lista</a>
        </div>
    </div>
@endsection