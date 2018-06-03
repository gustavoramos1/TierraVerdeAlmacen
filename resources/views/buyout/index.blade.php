@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="{{ route('buyout.create') }}" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Realizar Pedido</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fecha de pedido</th>
      <th scope="col">Hora de pedido</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>

    @foreach($buyouts as $buyout)
    <tr>
        <th scope="row">{{$buyout->id}}</th>
        <td>{{$buyout->date}}</td>
        <td>{{$buyout->created_at}}</td>
        <td>{{$buyout->providers}}</td>
        <td><a href="{{ route('buyout_detail.view',  $buyout['id']) }}" class="btn btn-sm btn-success"><i class = "fa fa-eye"></i></a>
        &nbsp;
        <a href="{{ route('buyout.show',  $buyout['id']) }}" class="btn btn-sm btn-danger"><i class = "fa fa-trash"></i></a></td>
      </tr>
      @endforeach
  
  </tbody>

</table>  
</div>
</div>


@endsection