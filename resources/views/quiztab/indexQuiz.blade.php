@extends('layouts.app', [
'namePage' => 'Add New Questions',
'class' => 'login-page sidebar-mini ',
'activePage' => 'quiz',
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
                             {!! Form::open(['action' => 'QuizController@store','method' => 'POST',]) !!}
                             <div class="form-group">
                                <!-- {!! Form::label('text', 'Quiz Name', ['class' => 'form-control'])!!} -->
                                {!! Form::label('text', 'Question:', ['class' => 'col-lg-8 control-label'])!!}
                                <div class="col-lg-12">
                                    {!! Form::text('question', '', ['class' => 'form-control', 'placeholder' => 'Question']) !!}
                                </div>
                            </div>
                             <div class="form-group">
                              {!! Form::label('text', 'Question Type:', ['class' => 'col-lg-8 control-label'])!!}
                                <div class="col-lg-12">
                            <select placeholder="Filter" class="form-control" name="question_type" style="height:40px">
                                <option>	Multiple Choice Single Answer</option>
                            </select>
                              </div>
                              </div>

                            <div class="form-group">
                               <!-- {!! Form::label('text', 'Quiz Name', ['class' => 'form-control'])!!} -->
                               {!! Form::label('text', 'Description:', ['class' => 'col-lg-8 control-label'])!!}
                               <div class="col-lg-12">
                                     {!! Form::textarea('description', '', ['class' => 'col-lg-2 control-label summernote','placeholder' => 'Description'])!!}
                               </div>
                           </div>
                            <div class="form-group">
                              <div class="col-lg-12">
                                <h6 class="quiztitle">Option 1)</h6>
                                <textarea  name="option_1" class='form-control summernote' ></textarea>
                              </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                            <h6 class="quiztitle">Option 2)</h6>

                            <textarea  name="option_2" class='form-control summernote'></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                            <h6 class="quiztitle">Option 3)</h6>

                            <textarea  name="option_3" class='form-control summernote'></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                            <h6 class="quiztitle">Option 4)</h6>

                            <textarea  name="option_4" class='form-control summernote'></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                           <!-- {!! Form::label('text', 'Quiz Name', ['class' => 'form-control'])!!} -->
                           {!! Form::label('text', 'Correct Option:', ['class' => 'col-lg-8 control-label'])!!}
                           <div class="col-lg-12">
                             <select placeholder="Filter" class="form-control" name="correct" style="height:40px">
                                 <option>option_1</option>
                                 <option>option_2</option>
                                 <option>option_3</option>
                                 <option>option_4</option>
                             </select>

                           </div>
                       </div>
                        <div class="form-group">
                              <div class="col-lg-12">
                                  {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info'] ) !!}
                              </div>
                          </div>
                           {!!Form::close()!!}
                    </div>
                         </div>
                     </div>
                </div>
             </div>
         </div>
     </div>
</div>

@endsection
