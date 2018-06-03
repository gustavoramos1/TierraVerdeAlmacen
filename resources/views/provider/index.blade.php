@extends('layouts.app')


@section('content')

<div class="container">
<div class="row justify-content-center">

  
<p> &nbsp; &nbsp; <a href="{{route('verpdfproviders')}}" class="btn btn-sx btn-success"><i class="fa fa-file-pdf-o fa-lg"></i>&nbsp;Informe en PDF</a></p> 
<p> &nbsp; &nbsp; <a href="{{route('descargarpdfproviders')}}" class="btn btn-sx btn-success"><i class="fa fa-download fa-lg"></i>&nbsp;Descargar PDF</a></p> 
<p> &nbsp; &nbsp; <a href="{{route('provider.create')}}" class="btn btn-sx btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;Nuevo Registro</a></p> 

<table class="table table-bordered table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($providers as $provider)

    <tr>
      <th scope="row">{{$provider->id}}</th>
      <td>{{$provider->name}}</td>
      <td>{{$provider->address}}</td>
      <td>{{$provider->phone}}</td>
      <td>{{$provider->email}}</td>
      <td><div class="row justify-content-center"> &nbsp;&nbsp; &nbsp;<a href="{{route('provider.edit',$provider->id)}}" class="btn btn-sx btn-success"><i class="fa fa-pencil fa-lg"></i></a>
      &nbsp; <a href="{{route('provider.show',$provider->id)}}" class="btn btn-sx btn-danger"><i class="fa fa-trash fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    </tr>
    @endforeach
  </tbody>

</table>     

</div>
</div> 

@endsection