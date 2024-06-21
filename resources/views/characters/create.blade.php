@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Crea Nuovo Personaggio</h1>

        <div class="form-container">
            <form method="POST" action="{{ route('characters.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="wikiUrl">Wiki URL</label>
                    <input type="url" class="form-control" id="wikiUrl" name="wikiUrl">
                </div>
                <div class="form-group">
                    <label for="race">Razza</label>
                    <input type="text" class="form-control" id="race" name="race">
                </div>
                <div class="form-group">
                    <label for="birth">Nascita</label>
                    <input type="text" class="form-control" id="birth" name="birth">
                </div>
                <div class="form-group">
                    <label for="gender">Genere</label>
                    <input type="text" class="form-control" id="gender" name="gender">
                </div>
                <div class="form-group">
                    <label for="hair">Capelli</label>
                    <input type="text" class="form-control" id="hair" name="hair">
                </div>
                <div class="form-group">
                    <label for="height">Altezza</label>
                    <input type="text" class="form-control" id="height" name="height">
                </div>
                <div class="form-group">
                    <label for="realm">Regno</label>
                    <input type="text" class="form-control" id="realm" name="realm">
                </div>
                <div class="form-group">
                    <label for="spouse">Coniuge</label>
                    <input type="text" class="form-control" id="spouse" name="spouse">
                </div>

                <button type="submit" class="btn btn-primary">Crea</button>
                <a href="{{ route('characters.index') }}" class="btn btn-secondary">Torna alla Lista</a>
            </form>
        </div>
    </div>
@endsection
