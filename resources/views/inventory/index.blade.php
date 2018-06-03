@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Registrar Inventario de Producto</a></p> 
El inventario de un producto se crea cuando dicho producto es registrado con valores iniciales en 0
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

    @foreach($inventories as $inventory)
        <tr>
            <th scope="row">{{$inventory->id}}</th>
            <td>{{$inventory->amount}}</td>
            <td>{{$inventory->stock_min}}</td>
            <td>{{$inventory->stock_max}}</td>
            <td><a href="{{ route('inventory.edit',  $inventory['id']) }}" class="btn btn-sm btn-success"><i class = "fa fa-pencil"></i></a>

    @endforeach
  
  </tbody>

</table>  
</div>
</div>


@endsection