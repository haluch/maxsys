@extends('layouts.backend')
@section('content')
@include('layouts.hero',['tela'=>'Produtos','acao'=>'Lista produtos'])
    <!-- Page Content -->
    <div class="content">
    @include('layouts.flash-message')
        <!-- Your Block -->
        @include('forms.types',['type'=>'action','title'=>'Novo produto','class'=>'primary','link'=>route('produtos.novo') ]) 
        @include('forms.types')
        <div class="card" >
           <table class="table table-hover bg-light datatables-produtos" id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Qtde</th>
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

         $('.datatables-produtos').DataTable({

                        "language":{ "url":"http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json" },
                        "dom": 'Bfrtip',
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        "processing":true,
                        "serverSide":true,
                        "ajax":"{{ route('api.produtos.index') }}",
                        "columns": [
                            { "data": "id"},
                            { "data": "nome"},
                            { "data": "descricao"},
                            { "data": "qtde"},
                            { "data": "action"}
                        ]
                    });
      
 });
</script>
@stop

@endsection
