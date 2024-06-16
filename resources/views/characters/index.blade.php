@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Lista Personaggi LOTR</h1>

        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Razza</th>
                    <th scope="col">Regno</th>
                    <th scope="col">Dettagli</th> 
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
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection