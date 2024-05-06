@extends('layouts.app')

@section('main-content')
    @foreach ($movies as $movie)
        <ul>
            <li>
                {{ $movie->id }}
                {{ $movie->title }}
                <button>
                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}">Visualizza Dettagli</a>
                </button>
            </li>
        </ul>
    @endforeach
@endsection
