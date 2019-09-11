            <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>           
            <script>
                $('.telefone').mask('(00) 0 0000-0000');
                $('.dinheiro').mask('#.##0,00', {reverse: true});
                $('.estado').mask('AA');
                $('.data').mask('99/99/9999');

            // Autocomplete - Pedido - Nome
            var options_cliente = {
	            url : "{{ route('api.ajax.clientes') }}",
                getValue : 'name',

                template:{
                    type:"custom",
                    method: function(value,item){
                            return value + "<br>"+ item.endereco + ' | ' + item.email;
                    }
                },

                list: { onSelectItemEvent: function() {
			                var value = $("#ac_cliente").getSelectedItemData().id;
            			    $("#idcliente").val(value).trigger("change");
		                },
                        match: {
		                	enabled: true
		                }
	                },
            };

            var options_servico = {
	            url : "{{ route('api.ajax.servicos') }}",
                getValue : 'nome',

                template:{
                    type:"custom",
                    method: function(value,item){
                            return value + "<br>TIPO: "+ item.tipo + ' | Valor: ' + item.valor;
                    }
                },

                list: { onSelectItemEvent: function() {
			                var value = $("#ac_servico").getSelectedItemData().id;
            			    $("#idservico").val(value).trigger("change");
		                },
                        match: {
		                	enabled: true
		                }
	                },
            };

          var options_produtos = {
	            url : "{{ route('api.ajax.produtos') }}",
                getValue : 'nome',

                template:{
                    type:"custom",
                    method: function(value,item){
                            return value + "<br>Descrição: "+ item.descricao + ' | Qtde: ' + item.qtde;
                    }
                },

                list: { onSelectItemEvent: function() {
			                var value = $("#ac_produto").getSelectedItemData().id;
			                var value = $("#ac_produto").getSelectedItemData().valor;
            			    $("#idproduto").val(value).trigger("change");
            			    $("#totalproduto").val(value).trigger("change");
		                },
                        match: {
		                	enabled: true
		                }
	                },
            };


            $("#ac_cliente").easyAutocomplete(options_cliente);
            $("#ac_servico").easyAutocomplete(options_servico);
            $("#ac_produto").easyAutocomplete(options_produtos);
            
            </script>
    