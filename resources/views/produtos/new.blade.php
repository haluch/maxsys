@extends('layouts.backend')
@section('content')
@if (isset($dados->id))
    @include('layouts.hero',['tela'=>'Serviços','acao'=>'Editar produto'])
@else
    @include('layouts.hero',['tela'=>'Produtos','acao'=>'Cadastrar novo produto'])
@endif
    <!-- Page Content -->
    <div class="content">
    
        <!-- Your Block -->
        <div class="card" >
            <form action="{{ route('produtos.store') }}" method="post">@csrf
                <div class="row">
                     @include('forms.types',['type'=>'hidden','name'=>'id','value'=>old("id", @$dados->id)])
                     @include('forms.types', ['type'=>'input','name'=>'nome', 'title'=>'Nome', 'value'=>old("nome", @$dados->nome)])
                     @include('forms.types', ['type'=>'input','name'=>'descricao', 'title'=>'Descrição', 'value'=>old("descricao", @$dados->descricao)])
                     @include('forms.types', ['type'=>'input','name'=>'qtde', 'title'=>'Quantidade', 'value'=>old("qtde", @$dados->qtde), 'col'=>'4'])
                     @include('forms.types', ['type'=>'input','name'=>'ncm', 'title'=>'NCM', 'value'=>old("ncm", @$dados->ncm), 'col'=>'4'])
                     @include('forms.types', ['type'=>'input','name'=>'valor', 'title'=>'Valor','selector'=>'dinheiro' ,'value'=>old("valor", @$dados->valor), 'col'=>'4'])
                     @include('forms.types', ['type'=>'textarea','name'=>'obs', 'title'=>'Observações', 'value'=>old("obs", @$dados->obs), 'col'=>'12'])
                     @include('forms.types',['type'=>'button','name'=>'btnSubmit','title'=>'Enviar','col'=>'3'])
                </div>
            </form>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->


@endsection
