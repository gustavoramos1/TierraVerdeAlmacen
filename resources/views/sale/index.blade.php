@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Realizar Venta</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fecha de venta</th>
      <th scope="col">Vendedor</th>
      <th scope="col">Cliente</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">#</th>
      <td>#</td>
      <td>#</td>
      <td>#</td>
      <td><a href="#" class="btn btn-sx btn-primary"><i class="fa fa-eye fa-lg">Ver Detalle</i></a>
      &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-pencil fa-lg">Editar</i></a>
      &nbsp; <a href="#" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg">Eliminar</i></a></td>
    </tr>
  
  </tbody>

</table>  
</div>
</div>


@endsection