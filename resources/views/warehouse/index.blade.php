@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Registrar Inventario de Producto</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Producto</th>
      <th scope="col">Cant. Existente</th>
      <th scope="col">Cant. Critica</th>
      <th scope="col">Cant. Maxima</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">#</th>
      <td>#</td>
      <td>#</td>
      <td>#</td>
      <td>#</td>
      <td> <a href="#" class="btn btn-sx btn-success"><i class="fa fa-pencil fa-lg">Editar</i></a>
      &nbsp; <a href="#" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg">Eliminar</i></a></td>
    </tr>
  
  </tbody>

</table>  
</div>
</div>


@endsection