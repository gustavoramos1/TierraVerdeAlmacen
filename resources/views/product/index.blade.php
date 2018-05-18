@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-list fa-lg"></i>&nbsp;Agregar Tipo de producto</a></p> 
<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Agregar producto</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Producto</th>
      <th scope="col">Tipo de Producto</th>
      <th scope="col">Descripción</th>
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
{{$product->render()}}
</div>
</div>


@endsection