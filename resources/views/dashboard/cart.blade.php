@extends('layouts.dashboard')

@section('content')
@foreach($cart as $item)
    <div class="card mb-4">
        <img src="{{ asset('images/books/' . ($item['image'] ?? 'default.jpg')) }}" 
             class="card-img-top" alt="{{ $item['title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $item['title'] }}</h5>
            <p class="card-text">Autor: {{ $item['author'] }}</p> <!-- Aqui está a chave 'author' -->
            <p class="card-text">Preço: R$ {{ $item['price'] }}</p>
            <p class="card-text">Quantidade: {{ $item['quantity'] }}</p>
            <form method="POST" action="{{ route('cart.update') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $item['id'] }}">
                <input type="number" name="quantity" value="{{ $item['quantity'] }}" class="form-control mb-2">
                <button type="submit" class="btn btn-warning">Atualizar</button>
            </form>
            <form method="POST" action="{{ route('cart.remove') }}" class="mt-2">
                @csrf
                <input type="hidden" name="id" value="{{ $item['id'] }}">
                <button type="submit" class="btn btn-danger">Remover</button>
            </form>
        </div>
    </div>
@endforeach
@endsection