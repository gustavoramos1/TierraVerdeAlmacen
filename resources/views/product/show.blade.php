@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eliminar producto</div>

                Sí usted borra un producto este tambien sera borrado del inventario.

                <div class="card-body">
                        
                        {!!Form::model($products,['route'=>['product.destroy', $products->id],'method'=>'DELETE'])!!}
                        

                            <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del producto</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" value="{{ $products->name }}" disabled>
                                    </div>
                                </div>


                                  
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descripcion</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" value="{{ $products->description }}" disabled>
                                </div>
                            </div>

                                                  
                                <div class="form-group row">
                                    <label for="type_movie_id" class="col-md-4 col-form-label text-md-right">Tipo de producto</label>

                                    <div class="col-md-6">
                                        <input id="type_product_id" type="text" class="form-control" value="{{ $select1[$products->type_product_id] }}" disabled>
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