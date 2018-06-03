@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar datos del tipo de producto</div>

                <div class="card-body">
                
                {!!Form::model($type_products,['route'=>['type_product.update', $type_products->id],'method'=>'PUT'])!!}
                

                <div class="form-group row">

                    {!!form::label('Tipo de pelicula')  !!}
                    {!!form::text('name',null,[
                    'id'=>'name',
                    'class'=>'form-control',
                    'required', 'autofocus'])
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