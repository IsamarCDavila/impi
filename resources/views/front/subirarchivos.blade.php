@extends('app.app')
@section('style')
@endsection
@section('script')
@endsection

@section('content')
<div class="portlet light ">
   <div class="portlet-body">
     <h1>Subir Archivos</h1>
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading text-center">NUEVO ARCHIVO</div>

                 <div class="panel-body">
                    {!! Form::open(['url' => 'crear-archivo/', 'method' => 'POST','files' => true])!!}
                     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                     <div class="col-md-12">
                         <label>Descripción</label>
                         <input type="text" name="descripcion" class="form-control" rows="3" placeholder=""></input>
                     </div>
                     <div class="col-md-12">
                         <label>Archivo</label>
                         <input type="file" value="" class="form-control" name="new_archivo">
                     </div>

                     <div class="col-md-12">
                       <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cancelar</button>
                       <button type="submit" class="btn blue">Crear</button>
                     </div>
                     {!! Form::close() !!}
                 </div>
             </div>
         </div>
     </div>
     </div>
</div>
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->



@endsection
