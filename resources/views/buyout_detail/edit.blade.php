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
    {!!Form::open(['route'=>'buyout_detail.store','method'=>'POST'])!!}
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


    @foreach($buyout_details as $buyout_detail)

    <tr>
      <th scope="row">{{$buyout_detail->id}}</th>
      <td>{{$buyout_detail->products}}</td>
      <td>{{$buyout_detail->amount}}</td>
      <td>{{($buyout_detail->buyout)*({$buyout_detail->amount}})}}</td>
      <td>
       &nbsp; <a href="{{route('buyout_detail.show',$buyout_detail->id)}}" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg"></i></a></td>
    </tr>
    @endforeach
  </tbody>


</table>  
{{$buyout->render()}}
</div>
</div>

<center> <a href="/pedidos" class="btn btn-sx btn-success"><i class="fa fa-ok fa-lg"></i> Listo </a> </center>

@endsection


