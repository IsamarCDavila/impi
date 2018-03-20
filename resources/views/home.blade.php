@extends('app.app')
@section('style')
@endsection
@section('script')
@endsection

@section('content')
<div class="portlet light ">
   <div class="portlet-body">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading text-center">IMPI</div>

                 <div class="panel-body text-center">
                     BIENVENIDO!
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
