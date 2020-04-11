@extends('template')

@section('title', 'Alterar Cliente')
            
@section('subtitle')
    Página de alteração de cliente. Por favor, preencha os campos conforme orientações individuais.
@endsection
                        
@section('content')
    <form method="POST" action="{{ route('alterar_clientes_efetua', ['id' => $cliente->id]) }}">
        @csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="nome" placeholder="Nome" value="{{ $cliente->nome }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="255" name="endereco" placeholder="Endereço" value="{{ $cliente->endereco }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="cidade" placeholder="Cidade" value="{{ $cliente->cidade }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-10">
                <select name="estado" class="form-control">
                    @foreach ($estados as $key => $value) 
                        <option value="{{ $value }}" @if ($value == $cliente->estado) selected @endif >{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="cep" class="col-sm-2 col-form-label">CEP:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP" value="{{ $cliente->cep }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Alterar</button>
            </div>
            
        </div>
    </form>
@endsection