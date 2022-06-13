@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="movie_card">
                        <h3>{{$movie->title}}</h3>
                        <h4>{{$movie->original_title}}</h4>
                        <p>{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <h5>{{$movie->vote}}</h5>
                    </div>
                </div>
            @empty
                <h1>Nothing to show yet!</h1>
            @endforelse
        </div>
    </div>
@endsection
