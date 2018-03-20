@extends('app.app')
@section('style')
@endsection
@section('script')
@endsection

@section('content')
<div class="portlet light ">
   <div class="portlet-body">
     <h1>Lista de Archivos</h1>
     <div class="row">
           <div class="table-scrollable">
             <table class="table table-hover">
                <thead>
                   <tr>
                      <th> # </th>
                      <th> DESCRIPCIÓN </th>
                      <th> ACCIONES </th>
                   </tr>
                </thead>
                <tbody>
                   @foreach ($archivos as $key)
                   <tr id="">
                      <td> {!!$key->id!!}</td>
                      <td> {!!$key->descripcion!!}</td>
                      <td>
                         <a  class="btn btn-xs blue btn-outline" data="{!!$key->id!!}"><i class="fa fa-pencil ico-editar"></i></a>
                         <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a>
                      </td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
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
