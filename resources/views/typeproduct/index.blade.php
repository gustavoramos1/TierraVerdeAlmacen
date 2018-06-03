@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="{{ route('type_product.create') }}" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Agregar tipo producto</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tipo de Producto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)

    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->products}}</td>
      <td><div class="row justify-content-center"> &nbsp;&nbsp; &nbsp;<a href="{{route('product.edit',$product->id)}}" class="btn btn-sx btn-success"><i class="fa fa-pencil fa-lg"></i></a>
      &nbsp; <a href="{{route('product.show',$product->id)}}" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    </tr>
    @endforeach
  </tbody>

</table>  
{{$product->render()}}
</div>
</div>


@endsection


