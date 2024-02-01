@extends('layouts.app')
@section('content')
<style>
    .custom-img-height {
        max-height: 200px; /* You can adjust this value based on your design preferences */
        width: auto; /* This ensures that the image width adjusts proportionally to the specified height */
    }
</style>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($books as $book)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/aaa.jpg') }}" class="card-img-top custom-img-height" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author: {{ $book->author }}</h6>
                    <p class="card-text">Genre: {{ $book->genre }}</p>
                    <p class="card-text">Publication Year: {{ $book->publication_year }}</p>
                </div>
                <div class="card-footer">
                    <form action="" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Make Reservation</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
