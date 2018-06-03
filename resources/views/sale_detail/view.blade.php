@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">
DETALLE DE VENTA 
<p> &nbsp; &nbsp; <a href="{{ route('sale.index') }}" class="btn btn-sx btn-primary"><i class="fa fa-chevron-left fa-lg"></i>&nbsp;Atras</a></p> 

<table class="table table-bordered table-striped">
  <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Fecha de pedido</th>
        <th scope="col">hora de pedido</th>
        <th scope="col">Proovedor</th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <th scope="row">{{$sale->id}}</th>
        <td>{{$sale->name}}</td>
        <td>{{$sale->date}}</td>
        <td>{{$sale->created_at}}</td>
        <td>{{$sale->clients}}</td>
      </tr>
    </tbody>
  
  </table>  
  <br><br>

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sale_details as $sale_detail)

    <tr>
      <th scope="row">{{$sale_detail->id}}</th>
      <td>{{$sale_detail->products}}</td>
      <td>{{$sale_detail->amount}}</td>
      <td>{{($product->cost_unitary)*({$sale_detail->amount}})}}</td>
    </tr>
    @endforeach
  </tbody>

</table>  
{{$sale->render()}}
</div>
</div>

<center> <a href="/pedidos" class="btn btn-sx btn-primary"><i class="fa fa-chevron-left fa-lg"></i></a> Volver </center>

@endsection


