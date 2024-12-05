@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <h1>Configurações da Conta</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário</label>
                <input type="text" name="username" class="form-control" id="username" 
                    value="{{ old('username', $user->name) }}">
                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" 
                    value="{{ old('email', $user->email) }}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Nova Senha</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Nova senha">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirme a Nova Senha</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                    placeholder="Confirme a nova senha">
            </div>

            <button type="submit" class="btn btn-primary">Salvar Configurações</button>
        </form>
    </div>
@endsection
