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
        <th scope="col">Cliente</th>
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

  <br><br>

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    {!!Form::open(['route'=>'sale_detail.store','method'=>'POST'])!!}
    <tr>
        <td> {!!form::select('product_id',$select,null,[
                'id'=>'product_id',
                'class'=>'form-control',
                'placeholder'=>'Elija un producto', 'required', 'autofocus'])  !!}
        </td>
        <td>
            {!!form::text('amount',null,[
              'id'=>'amount',
              'class'=>'form-control',
              'placeholder'=>'ingrese la cantidad', 'required', ])  !!}
        </td>
        <td> &nbsp; </td>
        <td> &nbsp;       
                {!!form::submit('Guardar',[
                'name'=>'guardar',
                'id'=>'guardar',
                'content'=>'<span>Añadir</span>',
                'class'=>'btn btn- success btn-sm m-t-10']) !!}
            </td>
    </tr>
    {!!form::close()!!}


    @foreach($sale_details as $sale_detail)

    <tr>
      <th scope="row">{{$sale_detail->id}}</th>
      <td>{{$sale_detail->products}}</td>
      <td>{{$sale_detail->amount}}</td>
      <td>{{($sale_detail->sale)*({$sale_detail->amount}})}}</td>
      <td>
       &nbsp; <a href="{{route('sale_detail.show',$sale_detail->id)}}" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg"></i></a></td>
    </tr>
    @endforeach
  </tbody>


</table>  
{{$sale->render()}}
</div>
</div>

<center> <a href="/pedidos" class="btn btn-sx btn-success"><i class="fa fa-ok fa-lg"></i> Listo </a> </center>

@endsection


