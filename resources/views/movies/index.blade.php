@extends('layouts.app')


@section('title', 'All Movies')

@section('content')
    <h1>MOVIES</h1>

        @foreach ($movies as $movie)
        <div class="card ">

            <img class="card-img-top" src="{{$movie->image}}" alt="Card image cap">
            <div class="card-body">

              <p class="card-text">{{$movie->title}}</p>

            </div>
          </div>
        @endforeach

@endsection


