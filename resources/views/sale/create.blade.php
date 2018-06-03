@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REGISTRAR VENTA</div>

                <div class="card-body">

                          
                {!!Form::open(['route'=>'sale.store','method'=>'POST'])!!}
                                        
                        <div class="form-group row">

                                {!!form::label('Fecha de venta')  !!}
                                {!!form::date('date',null,[
                                'id'=>'date',
                                'class'=>'form-control',
                                'required', 'autofocus'])
                            !!}

          

                
                        <div class="form-group row">
                        
                            {!! Form::label('Usuario') !!}
                                
                            {!! Form::select('user_id', $select, null, [
                                'id'=>'user_id',
                                'class'=>'form-control',
                                'placeholder'=>'Elija el Usuario que realiza la venta', 'required']) 
                            !!}
                          
                        
                        </div>

                        <div class="form-group row">
                        
                                {!! Form::label('Cliente') !!}
                                    
                                {!! Form::select('client_id', $select2, null, [
                                    'id'=>'cilent_id',
                                    'class'=>'form-control',
                                    'placeholder'=>'Elija el cliente', 'required']) 
                                !!}
                              
                            
                            </div>

                       
                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                               {!!form::submit('Guardar',[
                               'name'=>'guardar',
                               'id'=>'guardar',
                               'content'=>'<span>Continuar</span>',
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