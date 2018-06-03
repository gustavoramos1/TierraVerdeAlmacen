@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eliminar tipo de producto</div>

                <div class="card-body">
                        
                        {!!Form::model($type_products,['route'=>['type_product.destroy', $type_products->id],'method'=>'DELETE'])!!}
                        

                            <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del tipo de producto</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" value="{{ $type_products->name }}" disabled>
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