@extends('layouts.app', [
'namePage' => 'Result',
'class' => 'login-page sidebar-mini ',
'activePage' => 'result',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
@section('content')
<div class="panel-header">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="places-buttons">
                       {{csrf_field()}}
                         <div class="row">
                         </div>
                     </div>
                </div>
             </div>
         </div>
     </div>
</div>

@endsection
