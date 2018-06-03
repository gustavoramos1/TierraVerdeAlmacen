@extends('layouts.app')


@section('content')
<div class="container">
<div class="row justify-content-center">

<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-list fa-lg"></i>&nbsp;Tipo de productos</a></p> 
<p> &nbsp; &nbsp; <a href="#" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Agregar producto</a></p> 

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


