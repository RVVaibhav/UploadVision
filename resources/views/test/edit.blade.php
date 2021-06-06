@extends('layouts.app', [
'namePage' => 'Add New Test',
'class' => 'login-page sidebar-mini ',
'activePage' => 'test',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
@section('content')
<div class="panel-header">
</div>
<div class="content">
    <div class="row">
       {{csrf_field()}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="places-buttons">
                        <div class="row">

                          <div class="container" style="margin-top: 10px;">
		<div class="row">
			<div class="col-md-4">
				<form action="{{ url('multiple-insert') }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
			<table class="table table-bordered">
					<thead>
						<tr>

							<th>#</th>

							<th>S.N</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gift as $testdet)
						<tr>
							<td><input type="radio" name="student_id" value="{{$testdet->test_id}}"></td>
							<td>{{$testdet->test_id}}</td>
							<td>{{$testdet->test_name}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td></td>
							<th>S.N</th>
							<th>Subjects</th>
						</tr>
					</thead>
					<tbody>

						@foreach($posts as $subject)
						<tr>
							<td><input type="checkbox" name="subject_id[]" value="{{$subject->question_id}}"></td>
							<td>{{$subject->question_id}}</td>
							<td>{{$subject->question}}</td>
						</tr>

						@endforeach
					</tbody>
				</table>
				<div class="form-group">
					<button class="btn btn-primary btn-sm">
						Insert
					</button>
				</div>
				</form>
			</div>
		</div>
	</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('scripts')
</div>


@endsection
