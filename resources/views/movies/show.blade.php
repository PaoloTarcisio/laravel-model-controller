@extends('layouts.app')

@section('main-content')
    <section>
        <div class="">
            <div>
                <h2>
                    Titolo:
                </h2>
            </div>
            <div>
                Titolo originale: {{ $movie->original_title }}
            </div>
            <div>
                Nazionalità: {{ $movie->nationality }}
            </div>
            <div>
                Data di uscita: {{ $movie->date }}
            </div>
            <div>
                Voto medio: {{ $movie->vote }}
            </div>
        </div>
    </section>
@endsection
