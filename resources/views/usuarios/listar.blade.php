@extends('template')

@section('title', 'Listar Usuários')
            
@section('subtitle')
    Página de listagem de usuários. Para cadastrar um novo, clique <a href="{{ route('cadastrar_usuarios') }}">aqui</a>.<br>
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Login</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($us as $u) 
                <tr>
                    <th scope="row">{{ $u->id }}</th>
                    <td>{{ $u->nome }}</td>
                    <td>{{ $u->login }}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalExcluir"
                            data-href="{{ route('excluir_usuarios', [ 'id' => $u->id ]) }}"
                            data-nome="{{ $u->nome }}" data-id="{{ $u->id }} "
                        >Excluir</a> -
                        <a href="{{ route('alterar_usuarios', [ 'id' => $u->id ]) }}">Alterar</a>
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
                    <p>Deseja mesmo excluir o cliente <span class="nome"></span> de id #<span class="id"></span>?</p>
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
        $(this).find('span.nome').html($(e.relatedTarget).attr('data-nome'));
    });
</script>
@endsection
