@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>Configurações da Conta</h1>
        <p>Essa página será usada para configurar as preferências de sua conta.</p>

        <!-- Exemplo de um formulário de configurações -->
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário</label>
                <input type="text" class="form-control" id="username" value="Seu Nome de Usuário">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="seuemail@dominio.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Nova senha">
            </div>

            <button type="submit" class="btn btn-primary">Salvar Configurações</button>
        </form>
    </div>
@endsection
