@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Lista Personaggi LOTR</h1>
        <div class="mb-4 text-right">
            <a href="{{ route('characters.create') }}" class="btn btn-primary">Crea Nuovo Personaggio</a>
        </div>
        <div class="form-container">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Razza</th>
                        <th scope="col">Regno</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characterArray as $character)
                        <tr>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->race }}</td>
                            <td>{{ $character->realm }}</td>
                            <td>
                                <a href="{{ route('characters.show', $character->id) }}" class="btn btn-success">Dettagli</a>
                                <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-warning">Modifica</a>
                                <form action="{{ route('characters.destroy', $character->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo personaggio?')">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
