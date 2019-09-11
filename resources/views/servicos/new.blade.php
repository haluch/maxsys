@extends('layouts.backend')
@section('content')
@if (isset($dados->id))
    @include('layouts.hero',['tela'=>'Serviços','acao'=>'Editar serviço'])
@else
    @include('layouts.hero',['tela'=>'Serviços','acao'=>'Cadastrar novo serviço'])
@endif
    <!-- Page Content -->
    <div class="content">
    
        <!-- Your Block -->
        <div class="card" >
            <form action="{{ route('servicos.store') }}" method="post">@csrf
                @include('forms.types',['type'=>'hidden','name'=>'id','value'=>old("id", @$dados->id)])
                @include('forms.types', ['type'=>'input','name'=>'nome', 'title'=>'Nome', 'value'=>old("nome", @$dados->nome)])
                @include('forms.types', ['type'=>'input','name'=>'tipo', 'title'=>'Tipo', 'value'=>old("tipo", @$dados->tipo)])
                @include('forms.types', ['type'=>'input','name'=>'valor', 'title'=>'Valor', 'selector'=>'dinheiro','value'=>old("id", @$dados->valor)])
                @include('forms.types',['type'=>'button','name'=>'btnSubmit','title'=>'Enviar','col'=>'3'])
            </form>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->


@endsection
