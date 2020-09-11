@extends('layouts.app', [
'namePage' => 'Create Questions Set',
'class' => 'login-page sidebar-mini ',
'activePage' => 'testQuiz',
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
                             <div class="form-group">
                              {!! Form::label('text', 'Select Test:', ['class' => 'col-lg-8 control-label'])!!}
                              <div class="col-lg-12">
                                <select placeholder="Filter" class="form-control" name="question_type" style="height:40px">
                                  @foreach($items as $id => $country)
                                      <option value="{{ $id }}">
                                          {{ $country }}
                                      </option>
                                  @endforeach
                                </select>
                                @if($errors->has('test_id'))
                                 <span class="help-block text-danger">{{$errors->first('test_id')}}</span>
                                 @endif
                              </div>
                           </div>
                        </div>
                           @if(count(is_countable($posts)?$posts:[]) > 0)
                           <table class="table table-striped">
                                  <thead>
                                  <tr>
                                     <th>#</th>
                                     <th>Questions</th>
                                     <th>Question type</th>
                                     <th>% Correct</th>
                                     <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                     @foreach($posts as $post)
                                     <tr>
                                       <td>{{$post->question_id}}</td>
                                       <td>{{$post->question}}</td>
                                       <td>
                                         {{$post->question_type}}
                                      </td>
                                       <td>
                                         <div class="progress">
                                         <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                       </div>
                                    </td>
                                       <td>
                                         {!!Form::open(['action' => ['TestQuestionController@destroy',$items->test_id,$post->question_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                          {!!Form::hidden('_method', 'DELETE')!!}
                                         {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                                         {!!Form::close()!!}
                                     </td>
                                     </tr>
                                     @endforeach
                                     {{$posts->links()}}
                                     @else
                                         <p>No posts found</p>
                                     @endif
                                  </tbody>

                               </table>




                  </div>
               </div>
            </div>
         </div>
      </div>
</div>



@endsection
