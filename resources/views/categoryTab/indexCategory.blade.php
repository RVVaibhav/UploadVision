@extends('layouts.app', [
'namePage' => 'Create categories',
'class' => 'login-page sidebar-mini ',
'activePage' => 'category',
'backgroundImage' => asset('now')."/img/bg14.jpg",
])
@section('content')
<div class="panel-header">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="margin-bottom:20px;">
                  <div class="container border">
                         <div class="row" style="margin-top:20px;">
                           <div class="col-md-12">
                                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                                   <li class="nav-item">
                                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Test Category</a>
                                   </li>
                                   <li class="nav-item">
                                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Video Category</a>
                                   </li>
                                   <li class="nav-item">
                                     <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Question Category</a>
                                   </li>
                                   <li class="nav-item">
                                     <a class="nav-link" id="contact-tab" data-toggle="tab" href="#questionf" role="tab" aria-controls="contact" aria-selected="false">Question Format Category</a>
                                   </li>
                                 </ul>
                                 <div class="tab-content" id="myTabContent">
                                   <div class="tab-pane fade show active my-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      {{csrf_field()}}
                                      {!! Form::open(['action' => 'CategoriesController@store','method' => 'POST']) !!}
                                      <input name="id" value="1" type="hidden">
                                      {!!Form::text('test_cat', '', ['class' => 'form-control', 'placeholder' => 'Test Category'])!!}
                                      {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                                      {!!Form::close()!!}
                                   </div>
                                   <div class="tab-pane fade my-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                     {{csrf_field()}}
                                     {!! Form::open(['action' => 'CategoriesController@store','method' => 'POST']) !!}
                                     <input name="id" value="2" type="hidden">
                                     {!!Form::text('video_cat', '', ['class' => 'form-control', 'placeholder' => 'Video Category'])!!}
                                     {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                                     {!!Form::close()!!}
                                   </div>
                                   <div class="tab-pane fade my-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                     {{csrf_field()}}
                                     {!! Form::open(['action' => 'CategoriesController@store','method' => 'POST']) !!}
                                     <input name="id" value="3" type="hidden">
                                     {!!Form::text('question_cat', '', ['class' => 'form-control', 'placeholder' => 'Question Category'])!!}
                                     {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                                     {!!Form::close()!!}
                                   </div>
                                   <div class="tab-pane fade my-4" id="questionf" role="tabpanel" aria-labelledby="contact-tab">
                                     {{csrf_field()}}
                                     {!! Form::open(['action' => 'CategoriesController@store','method' => 'POST']) !!}
                                     <input name="id" value="4" type="hidden">
                                     {!!Form::text('question_cat_f', '', ['class' => 'form-control', 'placeholder' => 'Question Format Category'])!!}
                                     {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                                     {!!Form::close()!!}

                                   </div>



                                 </div>
                           </div>

                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- role model -->


</div>

@endsection
