@extends('template')

@section('title', 'Cadastrar Usuários')
            
@section('subtitle')
    Página de cadastro de usuários. Por favor, preencha os campos conforme orientações individuais.<br>
@endsection
                        
@section('content')
    <form method="POST" action="{{ route('cadastrar_usuarios_efetua') }}">
        @csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="nome" placeholder="Nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Login:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="255" name="login" placeholder="Login" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" maxlength="100" name="senha" placeholder="Senha" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
            
        </div>
    </form>
@endsection