@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar datos del productos</div>

                <div class="card-body">
                
                {!!Form::model($products,['route'=>['product.update', $products->id],'method'=>'PUT'])!!}
                

              
                <div class="form-group row">

                    {!!form::label('Nombre de la pelicula')  !!}
                    {!!form::text('name',null,[
                    'id'=>'name',
                    'class'=>'form-control',
                    'required', 'autofocus'])
                !!}


                <div class="form-group row">

                    {!!form::label('Descripcion')  !!}
                    {!!form::text('description',null,[
                    'id'=>'description',
                    'class'=>'form-control',
                    'required'])
                !!}
    
    
            </div>
    
            <div class="form-group row">
            
                {!! Form::label('Tipo de Producto') !!}
                    
                {!! Form::select('type_product_id', $select, null, [
                    'id'=>'type_product_id',
                    'class'=>'form-control',
                    'required']) 
                !!}
              
            
            </div>
           
            <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                   {!!form::submit('Guardar',[
                   'name'=>'guardar',
                   'id'=>'guardar',
                   'content'=>'<span>guardar</span>',
                   'class'=>'btn btn- success btn-sm m-t-10']) !!}

                </div>
            </div>
      {!!form::close()!!}
    </div>
</div>
</div>
</div>
</div>


@endsection