@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">
DETALLE DE PEDIDO
<p> &nbsp; &nbsp; <a href="{{ route('buyout.index') }}" class="btn btn-sx btn-primary"><i class="fa fa-chevron-left fa-lg"></i>&nbsp;Atras</a></p> 

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
        <th scope="row">{{$buyout->id}}</th>
        <td>{{$buyout->name}}</td>
        <td>{{$buyout->date}}</td>
        <td>{{$buyout->created_at}}</td>
        <td>{{$buyout->providers}}</td>
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
    @foreach($buyout_details as $buyout_detail)

    <tr>
      <th scope="row">{{$buyout_detail->id}}</th>
      <td>{{$buyout_detail->products}}</td>
      <td>{{$buyout_detail->amount}}</td>
      <td>{{($product->cost_unitary)*({$buyout_detail->amount}})}}</td>
    </tr>
    @endforeach
  </tbody>

</table>  
{{$buyout->render()}}
</div>
</div>
<center> <a href="/pedidos" class="btn btn-sx btn-primary"><i class="fa fa-chevron-left fa-lg"></i></a> Volver </center>


@endsection


