@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Livros de Ação</h1>
        
        <!-- Grid para 3 livros por linha -->
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/books/action/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">Autor: {{ $book->author }}</p>
                            <p class="card-text">Preço: R$ {{ $book->price }}</p>
                            <a href="{{ route('book.details', $book->id) }}" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginação -->
        <div class="d-flex justify-content-center mt-4">
            {{ $books->links() }} <!-- Exibe os links de paginação -->
        </div>
    </div>
@endsection
