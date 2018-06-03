@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="{{ route('sale.create') }}" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Realizar Pedido</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fecha de venta</th>
      <th scope="col">Hora de venta</th>
      <th scope="col">Cliente</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>

    @foreach($sales as $sale)
    <tr>
        <th scope="row">{{$sale->id}}</th>
        <td>{{$sale->date}}</td>
        <td>{{$sale->created_at}}</td>
        <td>{{$sale->client}}</td>
        <td><a href="{{ route('sale_detail.view',  $sale['id']) }}" class="btn btn-sm btn-success"><i class = "fa fa-eye"></i></a>
  &nbsp;
  <a href="{{ route('sale.show',  $sale['id']) }}" class="btn btn-sm btn-danger"><i class = "fa fa-trash"></i></a></td>
      </tr>
      @endforeach
  
  </tbody>

</table>  
</div>
</div>


@endsection