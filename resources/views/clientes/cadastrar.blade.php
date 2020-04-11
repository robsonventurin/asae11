@extends('template')

@section('title', 'Cadastrar Clientes')
            
@section('subtitle')
    Página de cadastro de clientes. Por favor, preencha os campos conforme orientações individuais.<br>
@endsection
                        
@section('content')
    <form method="POST" action="{{ route('cadastrar_clientes_efetua') }}">
        @csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="nome" placeholder="Nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="255" name="endereco" placeholder="Endereço" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="cidade" placeholder="Cidade" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="estado" class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-10">
                <select name="estado" class="form-control">
                    @foreach ($estados as $key => $value) 
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="cep" class="col-sm-2 col-form-label">CEP:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="8" name="cep" placeholder="CEP" data-mask="numeric" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
            
        </div>
    </form>
@endsection