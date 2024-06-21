@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Modifica Personaggio</h1>

        <div class="form-container">
            <form method="POST" action="{{ route('characters.update', $character->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $character->name }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="wikiUrl">Wiki URL</label>
                    <input type="url" class="form-control" id="wikiUrl" name="wikiUrl"
                        value="{{ $character->wikiUrl }}">
                </div>
                <div class="form-group">
                    <label for="race">Razza</label>
                    <input type="text" class="form-control" id="race" name="race" value="{{ $character->race }}">
                </div>
                <div class="form-group">
                    <label for="birth">Nascita</label>
                    <input type="text" class="form-control" id="birth" name="birth"
                        value="{{ $character->birth }}">
                </div>
                <div class="form-group">
                    <label for="gender">Genere</label>
                    <input type="text" class="form-control" id="gender" name="gender"
                        value="{{ $character->gender }}">
                </div>
                <div class="form-group">
                    <label for="hair">Capelli</label>
                    <input type="text" class="form-control" id="hair" name="hair" value="{{ $character->hair }}">
                </div>
                <div class="form-group">
                    <label for="height">Altezza</label>
                    <input type="text" class="form-control" id="height" name="height"
                        value="{{ $character->height }}">
                </div>
                <div class="form-group">
                    <label for="realm">Regno</label>
                    <input type="text" class="form-control" id="realm" name="realm"
                        value="{{ $character->realm }}">
                </div>
                <div class="form-group">
                    <label for="spouse">Coniuge</label>
                    <input type="text" class="form-control" id="spouse" name="spouse"
                        value="{{ $character->spouse }}">
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna</button>
                <a href="{{ route('characters.index') }}" class="btn btn-secondary">Torna alla Lista</a>
            </form>
        </div>
    </div>
@endsection
