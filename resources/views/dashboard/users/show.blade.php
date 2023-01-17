@extends('dashboard.layouts.main')

@section('container')
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Data Users
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Detail Data User</h4>
          </div>
          
          <div class="row">
            <div class="col-md-2">
                <img src="/vendors/assets/images/faces/face1.jpg" alt="profile" class="img-fluid rounded">
            </div>
            <div class="col-md-10">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="100">Nama</th>
                            <td width="10"> : </td>
                            <td> {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th width="100">Username</th>
                            <td width="10"> : </td>
                            <td> {{ $user->username }}</td>
                        </tr>
                        <tr>
                            <th width="100">Email</th>
                            <td width="10"> : </td>
                            <td> {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th width="100">Role</th>
                            <td width="10"> : </td>
                            <td>
                                @if ($user->is_admin === 1)
                                    Administrator
                                @else
                                    User
                                @endif
                            </td>
                        </tr>
                    </thead>
                </table>

                <a href="/dashboard/users" class="btn btn-sm btn-success mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>
            </div>
          </div>
          
      </div>
    </div>
  </div>
@endsection