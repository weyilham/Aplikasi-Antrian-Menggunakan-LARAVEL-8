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
            <h4 class="card-title float-left">Daftar User Aktif</h4>
            <a href="/dashboard/users/create" class="btn btn-sm btn-info mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data Users</a>
          </div>
          
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
          <strong>{{ session('success') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @if ($user->is_admin === 1)
                        Administrator
                      @else
                        Users
                      @endif
                      
                    
                    </td>
                    <td>
                      <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info"><i class="mdi mdi-eye"></i></a>
                      <a href="/dashboard/users/{{ $user->username }}/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
                      <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah yakin akan dihapus?')"><i class="mdi mdi-table-row-remove"></i></button>
                      </form>
                    </td>

                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection