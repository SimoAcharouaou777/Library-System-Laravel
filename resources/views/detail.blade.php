

@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row gap-4">
        <div class="col-md-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('make.reservation.book')}}" method="post">
                @csrf
                <input type="hidden" name="book_id" value="{{$book->id}}">
                <div class="mb-3">
                    <label for="startDate" class="form-label">Date début</label>
                    <input type="date" class="form-control" id="startDate" name="startDate" >
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-label">Date fin</label>
                    <input type="date" class="form-control" id="endDate" name="endDate" >
                </div>
                <button type="submit" class="btn btn-primary">Réserver</button>
            </form>
        </div>

        <div class="col-md-6">
            <div class=" border d-flex gap-4">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Livre 1">
                <div class="col-md-8 mt-4">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author: {{ $book->author }}</h6>
                    <p class="card-text">Genre: {{ $book->genre }}</p>
                    <p class="card-text">Publication Year: {{ $book->publication_year }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection