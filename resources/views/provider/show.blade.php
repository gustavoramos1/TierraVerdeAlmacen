@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eliminar proovedor</div>

                <div class="card-body">
                        
                        {!!Form::model($providers,['route'=>['provider.destroy', $providers->id],'method'=>'DELETE'])!!}
                        

                            <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre y apellido</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" value="{{ $providers->name }}" disabled>
                                    </div>
                                </div>



                            
                            <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control" value="{{ $providers->phone }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control" value="{{ $providers->address }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" value="{{ $providers->email }}" disabled>
                                    </div>
                                </div>


                                
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{route('movie.index')}}" class="btn btn-info btn-close btn-md m-t-10">
                                         Atras
                                        </a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                      <button type="submit" class="btn btn-danger">
                                            Eliminar
                                        </button> 
                                    </div>
                                </div>
                  {!!form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection