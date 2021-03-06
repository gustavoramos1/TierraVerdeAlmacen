@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar datos del cliente</div>

                <div class="card-body">
                
                {!!Form::model($clients,['route'=>['client.update', $clients->id],'method'=>'PUT'])!!}
                

              
                <div class="form-group row">

                    {!!form::label('Nombre y apellido')  !!}
                    {!!form::text('name',null,[
                    'id'=>'name',
                    'class'=>'form-control',
                    'required', 'autofocus'])
                !!}


            </div>

              
            <div class="form-group row">

                {!!form::label('Sexo')  !!}
                {!!Form::select('sex',null,[ 'id'=>'sex', array('Hombre' => 'Hombre', 'Mujer' => 'Mujer'),
                'placeholder'=>'Elija el sexo', 'required'])
            !!}


        </div>


          
        <div class="form-group row">

            {!!form::label('Fecha de nacimiento')  !!}
            {!!form::date('birthday',null,[
            'id'=>'name',
            'class'=>'form-control',
            'required'])
        !!}


        </div>
            <div class="form-group row">

                    {!!form::label('Telefono')  !!}
                    {!!form::text('phone',null,[
                    'id'=>'phone',
                    'class'=>'form-control','required'])
                !!}


            </div>
            <div class="form-group row">

                  {!!form::label('Dirección')  !!}
                    {!!form::text('address',null,[
                    'id'=>'address',
                    'class'=>'form-control',
                     'required'])
                !!}


            </div>
            <div class="form-group row">

                {!!form::label('Email')  !!}
                  {!!form::text('email',null,[
                  'id'=>'email',
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