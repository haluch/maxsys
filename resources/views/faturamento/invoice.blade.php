<html>
<style>
h1{
    color:red;
}
</style>
@php

//echo ($dados['data']);
@endphp
<h1 style="text-align:right;color:tomato;">Invoice</h1>
<table style="width:100%; background-color:tomato; color:white;">
<tr>
<th style="width:90%">Data: {{ $dados['data'] }}</th>
<th style="width:10%"># {{ $dados['pedido'] }}</th>
</tr>
</table>
<hr style="border-top: 1px solid black;">
<table style="width:100%">
<tr>
    <td width="75%"><span style="font-weight:bold; ">Dados empresa</span><br>
        Contato<br>
        Email<br>
        Telefone
    </td>
    <td width="35%"><span style="font-weight:bold; ">Dados cliente</span><br>
        Contato <br>
        Email   <br>
        Telefone
    </td>
</tr>
</table>



<hr style="border-top: 1px solid black;">
<table style="width:100%">
<tr>
    <td width="100%"><span style="font-weight:bold; ">Dados de Faturamento</span><br>
        Método de pagamento: [Boleto]<br>
        Vencimento:[00/00/0000]
    </td>
</tr>
</table>

<hr style="border-top: 1px solid black;">
<table style="width:100%">
<tr>
    <th style="width:10%">#</th>
    <th style="width:30%">Item</th>
    <th style="width:10%">Qtde</th>
    <th style="width:20%">Valor</th>
    <th style="width:30%">Total</th>
</tr>
<tr>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
</tr>
</table>
<hr style="border-top: 1px solid black;">
<table style="width:100%">
<tr>
    <td style="width:50%"></td>
    <td style="width:30%"><span style="font-weight:bold; ">Subtotal</span></td>
    <td style="width:20%">..</td>
</tr>
<tr>
    <td></td>
    <td><span style="font-weight:bold; ">Frete </span></td>
    <td>..</td>
</tr>
<tr>
    <td></td>
    <td><span style="font-weight:bold; ">Total </span> </td>
    <td>..</td>
</tr>
</table>

<hr style="border-top: 1px solid black;">
<table style="width:100%">
<tr>
    <td width="100%"><span style="font-weight:bold; ">Observaçoes</span><br>
       <small>Contato<br>
        Email<br>
        Telefone</small>
    </td>
</tr>
</table>


</html>