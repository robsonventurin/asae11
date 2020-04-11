@extends('template')

@section('title', 'Cadastrar Venda')
            
@section('subtitle')
    Página de cadastro de venda. Por favor, preencha os campos conforme orientações individuais.<br>
@endsection
                        
@section('content')
    <form method="POST" action="{{ route('cadastrar_venda_efetua') }}">
        @csrf
        <div class="form-group row">
            <label for="id_cliente" class="col-sm-2 col-form-label">Cliente:</label>
            <div class="col-sm-10">
                <select name="id_cliente" class="form-control">
                    @foreach ($clientes as $key => $value) 
                        <option value="{{ $value->id }}">#{{ $value->id }} - {{ $value->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="valor_total" class="col-sm-2 col-form-label">Valor Total:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="255" name="valor_total" id="valor_total" placeholder="R$ 0,00" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="descricao" class="col-sm-2 col-form-label">Descrição Da Venda:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="descricao" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script>
            $("#valor_total").maskMoney({
                prefix:'R$ ',
                suffix:"",
                formatOnBlur:false,
                allowZero:true,
                allowNegative:false,
                allowEmpty:true,
                doubleClickSelection:true,
                selectAllOnFocus:false,
                thousands: '.',
                decimal: ',' ,
                precision: 2,
                affixesStay :true,
                bringCaretAtEndOnFocus:true
            });
    </script>
@endsection