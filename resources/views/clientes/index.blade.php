@extends('layouts.backend')
@section('content')
@include('layouts.hero',['tela'=>'Clientes','acao'=>'Lista clientes'])
    <!-- Page Content -->
    <div class="content">
    @include('layouts.flash-message')
        <!-- Your Block -->
        @include('forms.types',['type'=>'action','title'=>'Novo cliente','class'=>'primary','link'=>route('clientes.novo') ]) 
        @include('forms.types')
        <div class="card" >
           <table class="table table-hover bg-light datatables-clientes" id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
           
            </tbody>
           </table>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->

@section('js_after')
<script>
 $(document).ready( function () {
        $('.datatables-clientes').DataTable({
        
            "language":{ "url":"http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json" },
            "processing":true,
            "serverSide":true,
            "ajax":"{{ route('api.clientes.index') }}",
            "columns": [
                { "data": "id"},
                { "data": "name"},
                { "data": "endereco"},
                { "data": "action"}
            ]
        });

 });
</script>
@stop
@endsection
