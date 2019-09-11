@extends('layouts.backend')
@section('content')
@include('layouts.hero',['tela'=>'Clientes','acao'=>'Cadastro novo cliente'])

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="card ">
            <div class="card-body">
                <form action="{{ route('clientes.store') }}" method="post">@csrf
                    <div class="row">
                        @include('forms.types',['type'=>'hidden','name'=>'id','value'=>old("id", @$dados->id)])
                        @include('forms.types',['type'=>'input','name'=>'name','title'=>'Nome', 'col'=>'6', 'value'=>old("name", @$dados->name)])
                        @include('forms.types',['type'=>'input','name'=>'endereco','title'=>'Endereço', 'col'=>'6', 'value'=>old("endereco",@$dados->endereco)])
                        @include('forms.types',['type'=>'input','name'=>'numero','title'=>'Nº', 'col'=>'1', 'value'=>old("numero",@$dados->numero)])
                        @include('forms.types',['type'=>'input','name'=>'bairro','title'=>'Bairro', 'col'=>'2', 'value'=>old("bairro",@$dados->bairro)])
                        @include('forms.types',['type'=>'input','name'=>'cep','title'=>'Cep', 'col'=>'3', 'value'=>old("cep",@$dados->cep)])
                        @include('forms.types',['type'=>'input','name'=>'tel_fixo','title'=>'Telefone Fixo', 'col'=>'3', 'value'=>old("tel_fixo",@$dados->tel_fixo) ])
                        @include('forms.types',['type'=>'input','name'=>'tel_cel','title'=>'Telefone Celular', 'col'=>'3', 'value'=>old("tel_cel",@$dados->tel_cel) ])
                        @include('forms.types',['type'=>'input','name'=>'email','title'=>'Email', 'col'=>'12', 'value'=>old("email",@$dados->email)])
                        @include('forms.types',['type'=>'button','name'=>'btnSubmit','title'=>'Enviar','col'=>'3'])
                    </div>
                </form>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
