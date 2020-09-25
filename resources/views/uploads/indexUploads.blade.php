@extends('layouts.app', [
'namePage' => 'Uploads',
'class' => 'login-page sidebar-mini ',
'activePage' => 'datauploads',
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
                                     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Question Bank Uploads</a>
                                   </li>
                                   <li class="nav-item">
                                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pdf Uploads</a>
                                   </li>
                                 </ul>
                                 <div class="tab-content" id="myTabContent">

                                   <div class="tab-pane fade show active my-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                                     <div class="row">
                                         <div class="col-xs-12 col-sm-12 col-md-12">
                                           <a href="{{ route('excel-file',['type'=>'xls']) }}">Download Excel xls</a> |
                                           <a href="{{ route('excel-file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |
                                           <a href="{{ route('excel-file',['type'=>'csv']) }}">Download CSV</a>
                                         </div>
                                      </div>
                                     <form action="{{ route('import-csv-excel') }}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                         <div class="form-group">
                                          {!! Form::label('text', 'Select Category:', ['class' => 'col-lg-12 control-label'])!!}
                                          <div class="col-lg-12">
                                            <select placeholder="Filter" class="form-control" id="question_type" name="question_type">
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
                                         {!! Form::label('sample_file','Select File to Import:',['class'=>'col-md-3']) !!}
                                         <div class="col-md-12">
                                          <input name="id" value="1" type="hidden">
                                         <input type="file" name="sample_file" class="form-control">
                                         {!! $errors->first('sample_file', '<p class="alert alert-danger">:message</p>') !!}
                                        </div>
                                         <button class="btn btn-success">Upload</button>
                                     </form>
                                   </div>
                                   <div class="tab-pane fade my-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                     <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-group">
                                           <div class="col-lg-12">
                                         {!!Form::text('pdf_title', '', ['class' => 'form-control', 'placeholder' => 'Pdf Title'])!!}
                                           </div>
                                        {!! Form::label('text', 'Select Category:', ['class' => 'col-lg-12 control-label'])!!}
                                        <div class="col-lg-12">
                                          <select placeholder="Filter" class="form-control" id="question_type" name="question_type">
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
                                       {!! Form::label('sample_file','Select File to Import:',['class'=>'col-md-3']) !!}
                                       <div class="col-md-12">
                                        <input name="id" value="1" type="hidden">
                                       <input type="file" name="sample_file" class="form-control">
                                       {!! $errors->first('sample_file', '<p class="alert alert-danger">:message</p>') !!}
                                      </div>
                                       <button class="btn btn-success">Upload</button>

                                    </form>

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
