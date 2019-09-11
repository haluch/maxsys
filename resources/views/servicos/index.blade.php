@extends('layouts.backend')
@section('content')
@include('layouts.hero',['tela'=>'Serviços','acao'=>'Lista serviços'])
    <!-- Page Content -->
    <div class="content">
    @include('layouts.flash-message')
        <!-- Your Block -->
        @include('forms.types',['type'=>'action','title'=>'Novo serviço','class'=>'primary','link'=>route('servicos.novo') ]) 
        @include('forms.types')
        <div class="card" >
           <table class="table table-hover bg-light datatables-servicos" id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Valor</th>
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
          $('.datatables-servicos').DataTable({
            "language":{ "url":"http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json" },
            "processing":true,
            "serverSide":true,
            "ajax":"{{ route('api.servicos.index') }}",
            "columns": [
                { "data": "id"},
                { "data": "nome"},
                { "data": "valor"},
                { "data": "action"}
            ]
    });
 });
</script>
@stop

@endsection
