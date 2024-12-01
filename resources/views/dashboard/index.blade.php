@extends('layouts.dashboard')

@section('title', 'Livraria - Categorias')

@section('content')
    <div class="row">
        <!-- Categoria: Livros de Ação -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/categories/action.jpg') }}" class="card-img-top" alt="Livros de Ação">
                <div class="card-body">
                    <h5 class="card-title">Livros de Ação</h5>
                    <p class="card-text">
                        Histórias cheias de adrenalina, aventuras emocionantes e muita ação. Explore o melhor da literatura de ação.
                    </p>
                    <a href="{{ route('dashboard.books.action') }}" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        </div>

        <!-- Categoria: Livros de Romance -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/categories/romance.jpg') }}" class="card-img-top" alt="Livros de Romance">
                <div class="card-body">
                    <h5 class="card-title">Livros de Romance</h5>
                    <p class="card-text">
                        Apaixone-se com histórias encantadoras de amor, drama e emoção. Descubra o romance ideal para você.
                    </p>
                    <a href="{{ route('dashboard.books.romance') }}" class="btn btn-danger">Ver Mais</a>
                </div>
            </div>
        </div>

        <!-- Categoria: Livros Infantis -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/categories/kids.png') }}" class="card-img-top" alt="Livros Infantis">
                <div class="card-body">
                    <h5 class="card-title">Livros Infantis</h5>
                    <p class="card-text">
                        Deixe a imaginação das crianças voar com histórias educativas, divertidas e emocionantes.
                    </p>
                    <a href="{{ route('dashboard.books.kids') }}" class="btn btn-success">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
@endsection
