@extends('layouts.backend')
@section('content')
@include('layouts.hero',['tela'=>'Faturamento','acao'=>'Emissão de novo Pedido'])
    <!-- Page Content -->
    <div class="content">
        @include('layouts.flash-message')
        <!-- Your Block -->
        <div class="card " >
            <div class="row">
                @include('forms.types',['type'=>'hidden','name'=>'idcliente','value'=>''])
                @include('forms.types',['type'=>'hidden','name'=>'idservico','value'=>''])
                @include('forms.types',['type'=>'hidden','name'=>'idproduto','value'=>''])
                @include('forms.types',['type'=>'input','name'=>'ac_cliente','title'=>'Cliente','col'=>'10'])  
                @include('forms.types',['type'=>'input','name'=>'vencimento','title'=>'Vencimento','selector'=>'data','col'=>'2'])  
                @include('forms.types',['type'=>'input','name'=>'ac_servico','title'=>'Serviço','col'=>'12'])  
                @include('forms.types',['type'=>'input','name'=>'ac_produto','title'=>'Produto','col'=>'10'])  
                @include('forms.types',['type'=>'input','name'=>'totalproduto','title'=>'Total','col'=>'2'])  
                @include('forms.types',['type'=>'textarea','name'=>'obs','title'=>'Observações'])  
                @include('forms.types',['type'=>'button', 'title'=>'Gerar pedido'])  
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->


@endsection
