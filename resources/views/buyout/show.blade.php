@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Eliminar pedido</div>

                ¿Usted esta seguro de revocar este pedido?.

                <div class="card-body">
                        
                        {!!Form::model($buyouts,['route'=>['buyout.destroy', $buyouts->id],'method'=>'DELETE'])!!}
                        

                            <div class="form-group row">
                                    <label for="created_at" class="col-md-4 col-form-label text-md-right">Fecha de realizacion</label>

                                    <div class="col-md-6">
                                        <input id="created_at" type="text" class="form-control" value="{{ $buyouts->created_at }}" disabled>
                                    </div>
                                </div>


                                
                                                  
                                <div class="form-group row">
                                    <label for="provider_id" class="col-md-4 col-form-label text-md-right">Prooverdor</label>

                                    <div class="col-md-6">
                                        <input id="provider_id" type="text" class="form-control" value="{{ $select[$buyouts->provider_id] }}" disabled>
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{route('buyout.index')}}" class="btn btn-info btn-close btn-md m-t-10">
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