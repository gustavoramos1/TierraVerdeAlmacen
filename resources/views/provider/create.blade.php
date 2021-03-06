@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Proovedor</div>

                <div class="card-body">
                
                {!!Form::open(['route'=>'client.store','method'=>'POST'])!!}
                

                        <div class="form-group row">

                                {!!form::label('Nombre y apellido')  !!}
                                {!!form::text('name',null,[
                                'id'=>'name',
                                'class'=>'form-control',
                                'placeholder'=>'Escriba el nombre y apellidos', 'required', 'autofocus'])
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
                                'placeholder'=>'Ejemplo:(Calle 20a # 12b-35)', 'required'])
                            !!}


                        </div>

                    </div>
                    <div class="form-group row">
        
                        {!!form::label('Email')  !!}
                          {!!form::text('email',null,[
                          'id'=>'email',
                          'class'=>'form-control',
                          'placeholder'=>'Digite el correo electronico', 'required'])
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