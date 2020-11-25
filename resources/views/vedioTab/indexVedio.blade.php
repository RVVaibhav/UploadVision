@extends('layouts.app', [
'namePage' => 'Add New Vedio',
'class' => 'login-page sidebar-mini ',
'activePage' => 'vedio',
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
                          {!! Form::open(['action' => 'VedioAddController@store','method' => 'POST','enctype' => 'multipart/form-data','files' => true]) !!}
                        <div class="form-group">
                           {!! Form::label('text', 'Title:', ['class' => 'col-lg-12 control-label'])!!}
                           <div class="col-lg-12">
                               {!! Form::text('vedioTitle', '', ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="col-12">
                                {!! Form::label('text', 'Vedio:', ['class' => 'col-lg-12 control-label'])!!}
                          <div class="col-xs-3 col-lg-12">
                           <input type="file" name="image" class="form-control">
                            {!! $errors->first('image', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                            </div>
                      </div>
                      <div class="form-group">
                         {!! Form::label('category', 'Video Category', ['class' => 'col-lg-8 control-label'])!!}
                         <div class="form-group">
                            {!! Form::label('headers', 'Headers One:', ['class' => 'col-lg-8 control-label'])!!}
                             <div class="col-lg-12">
                               <select name="country_id" id="country" class="form-control">
                                  @foreach($items as $id => $country)
                                      <option value="{{ $id }}">
                                          {{ $country }}
                                      </option>
                                  @endforeach
                              </select>
                               @if($errors->has('test_header_1_id'))
                               <span class="help-block text-danger">{{$errors->first('test_header_1_id')}}</span>
                               @endif
                             </div>
                         </div>
                         <div class="form-group">
                            {!! Form::label('headers', 'Headers Two:', ['class' => 'col-lg-8 control-label'])!!}
                             <div class="col-lg-12">
                               <select name="city" id="country" class="form-control">

                              </select>
                               @if($errors->has('test_header_2_id'))
                               <span class="help-block text-danger">{{$errors->first('test_header_1_id')}}</span>
                               @endif
                             </div>
                         </div>
                         <div class="form-group">
                            <!-- {!! Form::label('text', 'Quiz Name', ['class' => 'form-control'])!!} -->
                            {!! Form::label('text', 'Headers three:', ['class' => 'col-lg-8 control-label'])!!}
                            <div class="col-lg-12">
                                {!!Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])!!}
                            </div>
                        </div>
                      </div>
                       <div class="form-group">
                          {!! Form::label('startdate', 'Start Date (Video Visibility Start Date. YYYY-MM-DD HH:ll:SS):', ['class' => 'col-lg-12 control-label'])!!}
                           <div class="col-lg-12">
                              <input type="datetime-local" id="birthdaytime" name="startdate" class= "form-control">
                          </div>
                       </div>
                       <div class="form-group">
                          {!! Form::label('enddate', 'End Date (Video Visibility End Date. YYYY-MM-DD HH:ll:SS):', ['class' => 'col-lg-12 control-label'])!!}
                           <div class="col-lg-12">
                            <input type="datetime-local" id="birthdaytime" name="enddate" class= "form-control">
                           </div>
                       </div>
                       <div class="form-group">
                             <div class="col-lg-6">
                                 {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                             </div>
                         </div>
                         {!!Form::close()!!}
                    </div>
                </div>

                @if(count(is_countable($posts)?$posts:[]) > 0)
                <table class="table table-striped">
                       <thead>
                       <tr>
                          <th>SrNo</th>
                          <th>Vedio Title</th>
                          <th>Vedio</th>
                          <th>Created By</th>
                          <th>Action</th>
                       </tr>
                       </thead>
                       <tbody>
                          @foreach($posts as $post)
                          <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td><iframe src="{{url('storage/'.$post->vedio)}}"width="60%" height="80"></iframe></td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <div class="col-auto"><a class="btn btn-info" href="{{ url('/vedio'.$post->id) }}" data-hover="tooltip" data-placement="top"
                                      data-target="#addnewgift{{$post->id}}" data-toggle="modal" id="modal-edit" title="Edit"><i
                                          class="fa fa-fw fa-edit"></i></a>
                                          {!!Form::open(['action' => ['VedioAddController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                           {!!Form::hidden('_method', 'DELETE')!!}
                                          {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                                          {!!Form::close()!!}

                                 @csrf
                               </form>
                              </div>
                            </td>
                          </tr>
                          <div class="modal fade" id="addnewgift{{$post->id}}">
                              <div class="modal-dialog modal-col-md-6">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Edit Post</h5>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body">
                                            {!! Form::open(['action' => ['VedioAddController@update', $post->id], 'method' => 'POST']) !!}
                                              <div class="card-body">
                                                  {{ csrf_field() }}
                                                  <div class="form-row">
                                                      <div class="col-12">
                                                          <label><b>Vedio Title</b> <sup class="text-danger">*</sup></label>
                                                          <input type="text" name="gift_name" value="{{$post->title}}" class="form-control" placeholder="Gift Name"
                                                              required>
                                                          @if ($errors->has('gift_name'))
                                                          <span class="help-block text-danger">
                                                              <strong class="text-danger">{{ $errors->first('gift_name') }}</strong>
                                                          </span>
                                                          @endif
                                                      </div>
                                                  </div>

                                                  <div class="form-row">
                                                      <div class="col-12">
                                                        {!! Form::label('startdate', 'Start Date (Video Visibility Start Date. YYYY-MM-DD HH:ll:SS):', ['class' => 'col-lg-12 control-label'])!!}

                                                            <input type="datetime-local" value="{{$post->visibleDate}}" id="birthdaytime" name="startdate" class= "form-control">

                                                          @if ($errors->has('startdate'))
                                                          <span class="help-block text-danger">
                                                              <strong class="text-danger">{{ $errors->first('startdate') }}</strong>
                                                          </span>
                                                          @endif
                                                      </div>
                                                  </div>
                                                  <div class="form-row">
                                                      <div class="col-12">
                                                        {!! Form::label('enddate', 'End Date (Video Visibility End Date. YYYY-MM-DD HH:ll:SS):', ['class' => 'col-lg-12 control-label'])!!}

                                                          <input type="datetime-local" value="{{$post->endDate}}" id="birthdaytime" name="enddate" class= "form-control">

                                                          @if ($errors->has('enddate'))
                                                          <span class="help-block text-danger">
                                                              <strong class="text-danger">{{ $errors->first('enddate') }}</strong>
                                                          </span>
                                                          @endif
                                                      </div>
                                                  </div>
                                                  <div class="form-row">
                                                      <div class="col-12">
                                                          <label><b>Vedio</b> <sup class="text-danger">*</sup></label>
                                                          <input type="file" name="gift_img" class="form-control"
                                                              id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                          <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                                                          @if ($errors->has('gift_img'))
                                                          <span class="help-block text-danger">
                                                              <strong class="text-danger">{{ $errors->first('gift_img') }}</strong>
                                                          </span>
                                                          @endif
                                                      </div>
                                                  </div>
                                                  {!!Form::hidden('_method','PUT')!!}
                                                  {!!Form::submit('Edit', ['class'=>'btn btn-primary'])!!}
                                                  @csrf
                                              </div>
                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
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
    @yield('scripts')
</div>
@endsection
