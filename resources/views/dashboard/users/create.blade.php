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
            <h4 class="card-title float-left">Tambah Data User</h4>
          </div>
          
          <form action="/dashboard/users" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap : </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username : </label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password : </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="password2" class="form-label">Konfirmasi Password : </label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"  name="password_confirmation" id="password2" placeholder="Konfirmasi Password" required>
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <button type="submit" class="btn btn-gradient-info btn-sm mt-2">Tambah Data</button>
              
          </form>
          
        </div>
      </div>
    </div>
  </div>
@endsection