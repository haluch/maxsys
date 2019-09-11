 <script>
    $(document).ready( function () {
            $('.datatables-clientes').DataTable({
                "language":{
                                "sEmptyTable":   "Nenhum registro encontrado",
                                "sProcessing":   "Processando...",
                                "sLengthMenu":   "Mostrar _MENU_ registros",
                                "sZeroRecords":  "Não foram encontrados resultados",
                                "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                                "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                                "sInfoFiltered": "(filtrado de _MAX_ registros no total)",
                                "sInfoPostFix":  "",
                                "sSearch":       "Procurar:",
                                "sUrl":          "",
                                "oPaginate": {
                                    "sFirst":    "Primeiro",
                                    "sPrevious": "Anterior",
                                    "sNext":     "Seguinte",
                                    "sLast":     "Último"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Ordenar colunas de forma ascendente",
                                    "sSortDescending": ": Ordenar colunas de forma descendente"
                                }
                            },
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


          $('.datatables-servicos').DataTable({
                "language":{
                                "sEmptyTable":   "Nenhum registro encontrado",
                                "sProcessing":   "Processando...",
                                "sLengthMenu":   "Mostrar _MENU_ registros",
                                "sZeroRecords":  "Não foram encontrados resultados",
                                "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                                "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                                "sInfoFiltered": "(filtrado de _MAX_ registros no total)",
                                "sInfoPostFix":  "",
                                "sSearch":       "Procurar:",
                                "sUrl":          "",
                                "oPaginate": {
                                    "sFirst":    "Primeiro",
                                    "sPrevious": "Anterior",
                                    "sNext":     "Seguinte",
                                    "sLast":     "Último"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Ordenar colunas de forma ascendente",
                                    "sSortDescending": ": Ordenar colunas de forma descendente"
                                }
                            },
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