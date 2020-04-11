@extends('template')

@section('title', 'Página de Login')
            
@section('subtitle')
    Faça seu login para acessar o sistema.<br>
@endsection

@section('content')
<form method="post" action="{{ route('logar') }}">
        @csrf
        <div class="form-group row">
            <label for="login" class="col-sm-2 col-form-label">Login:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="login" placeholder="Login" required>
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
                <button type="submit" class="btn btn-primary btn-block">Acessar</button>
            </div>
        </div>
	</form>
@endsection