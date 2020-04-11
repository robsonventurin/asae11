@extends('template')

@section('title', 'Listar Vendas')
            
@section('subtitle')
    Página de listagem de vendas. Para cadastrar um novo, clique <a href="{{ route('cadastrar_venda') }}">aqui</a>.<br>
    @if(isset($cliente))
        Mostrando as vendas do cliente {{ $cliente->nome }}.
    @endif
@endsection

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendas as $v) 
                <tr>
                    <th scope="row">{{ $v->id }}</th>
                    <td>{{ $v->cliente->nome }}</td>
                    <td>{{ $v->descricao }}</td>
                    <td>R$ {{ number_format($v->valor_total, 2, ',', '.') }}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalExcluir"
                            data-href="{{ route('excluir_vendas', [ 'id' => $v->id ]) }}"
                            data-id="{{ $v->id }} "
                        >Excluir</a> -
                        <a href="{{ route('alterar_vendas', [ 'id' => $v->id ]) }}">Alterar</a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

     <!-- Modal -->
    <div class="modal fade" id="modalExcluir" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tem certeza?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja mesmo excluir a venda de id #<span class="id"></span>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <a class="btn btn-danger btn-ok">Deletar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#modalExcluir').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).attr('data-href'));
        $(this).find('span.id').html($(e.relatedTarget).attr('data-id'));
    });
</script>
@endsection
