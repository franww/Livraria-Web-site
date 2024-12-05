@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Livros Infantis</h1>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/books/kids/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">Autor: {{ $book->author }}</p>
                            <p class="card-text">Preço: R$ {{ $book->price }}</p>
                            
                            <!-- Botão de Adicionar ao Carrinho -->
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $book->id }}">
                                <input type="hidden" name="title" value="{{ $book->title }}">
                                <input type="hidden" name="price" value="{{ $book->price }}">
                                <button type="submit" class="btn btn-success">Adicionar ao Carrinho</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
