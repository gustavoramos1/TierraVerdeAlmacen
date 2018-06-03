@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eliminar Venta</div>

                ¿Usted esta seguro de revocar esta venta?.

                <div class="card-body">
                        
                        {!!Form::model($sales,['route'=>['sale.destroy', $sales->id],'method'=>'DELETE'])!!}
                        

                            <div class="form-group row">
                                    <label for="created_at" class="col-md-4 col-form-label text-md-right">Fecha de realizacion</label>

                                    <div class="col-md-6">
                                        <input id="created_at" type="text" class="form-control" value="{{ $sales->created_at }}" disabled>
                                    </div>
                                </div>


                                
                                                  
                                <div class="form-group row">
                                    <label for="client_id" class="col-md-4 col-form-label text-md-right">CLiente</label>

                                    <div class="col-md-6">
                                        <input id="client_id" type="text" class="form-control" value="{{ $select[$sales->client_id] }}" disabled>
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{route('sale.index')}}" class="btn btn-info btn-close btn-md m-t-10">
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