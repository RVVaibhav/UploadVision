@extends('layouts.app', [
'namePage' => 'Users',
'class' => 'login-page sidebar-mini ',
'activePage' => 'users',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header">
</div>
<div class="content">
    <!-- <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <a class="btn btn-primary btn-round text-white pull-right" href="#">Add user</a>
            <h4 class="card-title">Users</h4>
            <div class="col-12 mt-2">
                                        </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Creation date</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="https://now-ui-dashboard-laravel.creative-tim.com/assets/img/default-avatar.png" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
                    </td>
                    <td>Admin</td>
                    <td>admin@nowui.com</td>
                    <td>25/02/2020 10:14</td>
                      <td class="text-right">
                                             <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="https://now-ui-dashboard-laravel.creative-tim.com/assets/img/default-avatar.png" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
                    </td>
                    <td>Admin</td>
                    <td>admin@nowui.com</td>
                    <td>25/02/2020 10:14</td>
                      <td class="text-right">
                                             <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="https://now-ui-dashboard-laravel.creative-tim.com/assets/img/default-avatar.png" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
                    </td>
                    <td>Admin</td>
                    <td>admin@nowui.com</td>
                    <td>25/02/2020 10:14</td>
                      <td class="text-right">
                                             <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <table width="100%">
                        <tr>
                            <td><input type="text" class="form-control pull-left" style="height:40px;width: 300px;"
                                    placeholder="Search" /></td>
                            <td class="text-center">
                                <select placeholder="Filter" class="form-control" style="height:40px">
                                    <option>Bot All Level</option>
                                    <option>Bot Level 1</option>
                                    <option>Bot Level 2</option>
                                    <option>Bot Level 3</option>
                                    <option>Verified</option>
                                    <option>Primary Accs</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Video Call enabled</option>
                                    <option>Audio Call ebabled</option>
                                </select>
                            </td>
                            <td><a class="btn btn-primary btn-round text-white pull-right"
                                    href="{{route('users.create')}}">Create New User</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @if(count($users) > 0)
        @foreach ($users as $user)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body ">
                    <table>
                        <tr>
                            <td rowspan=3>
                            @if($user->userDetails['profile_pic'])
                                <img class="img-circle" src="{{ Storage::url($user->userDetails['profile_pic'])}}"
                                    style="border-radius: 50%;width: 50px;height: 50px;">
                            @else
                                <img class="img-circle" src="/img/default-avatar.png"
                                    style="border-radius: 50%;width: 50px;height: 50px;">
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td><span style="font-size:20px">{{$user->name}}</span></td>
                        </tr>
                        <tr>
                            <td>150K Followers</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer ">
                    <div class="stats">
                        {{$user->userDetails['bot'] ? 'Bot' : ''}} | 150 Voice | Video Call | Level
                        {{$user->userDetails['level_id']}} | {{$user->userDetails['status']}} |
                        <a class="btn btn-link" href="/users/{{$user->id}}" ><i class="fa fa-fw fa-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{$users->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection