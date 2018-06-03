@extends('layouts.app')


@section('content')

<div class="container">
<div class="row justify-content-center">

  
<p> &nbsp; &nbsp; <a href="{{route('verpdfclients')}}" class="btn btn-sx btn-success"><i class="fa fa-file-pdf-o fa-lg"></i>&nbsp;Informe en PDF</a></p> 
<p> &nbsp; &nbsp; <a href="{{route('descargarpdfclients')}}" class="btn btn-sx btn-success"><i class="fa fa-download fa-lg"></i>&nbsp;Descargar PDF</a></p> 
<p> &nbsp; &nbsp; <a href="{{route('client.create')}}" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Nuevo Registro</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)

    <tr>
      <th scope="row">{{$client->id}}</th>
      <td>{{$client->name}}</td>
      <td>{{$client->sex}}</td>
      <td>{{$client->birthday}}</td>
      <td>{{$client->address}}</td>
      <td>{{$client->phone}}</td>
      <td>{{$client->email}}</td>
      <td><div class="row justify-content-center"> &nbsp;&nbsp; &nbsp;<a href="{{route('client.edit',$client->id)}}" class="btn btn-sx btn-success"><i class="fa fa-pencil fa-lg"></i></a>
      &nbsp; <a href="{{route('client.show',$client->id)}}" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    </tr>
    @endforeach
  </tbody>

</table>     

</div>
</div> 

@endsection