@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card">
                        <h6 class="red">Titolo: <span class="text-black">{{ $movie->title }}</span></h6>
                        <h6 class="red">Titolo originale: <span class="text-black">{{ $movie->original_title }}</span>
                        </h6>
                        <h6 class="red">Nazionalità: <span class="text-black">{{ $movie->nationality }}</span></h6>
                        <h6 class="red">Data d'uscita: <span class="text-black">{{ $movie->date }}</span></h6>
                        <h6 class="red">Voto: <span class="text-black">{{ $movie->vote }}</span></h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
