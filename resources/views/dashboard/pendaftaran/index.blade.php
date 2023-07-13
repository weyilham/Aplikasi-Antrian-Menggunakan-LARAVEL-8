@extends('dashboard.layouts.main')

@section('container')
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Daftar Pasien
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        
        <div class="card-body">
          <div class="clearfix">
            
            <a href="/dashboard/pendaftaran/create" class="btn btn-sm btn-danger mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data Pasien Baru</a>

          </div>
          
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md" role="alert">
          <strong>{{ session('success') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Handphone</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pendaftaran as $pasien)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td> <a href="/dashboard/pendaftaran/{{ $pasien->no_rm }}" class="text-decoration-none text-dark"> {{ $pasien->nama }} </a> </td>
                      <td>{{ $pasien->no_hp }}</td>
                      <td>{{ $pasien->alamat }}</td>
                      <td>
                        <a href="/dashboard/pendaftaran/{{ $pasien->no_rm }}" class="badge bg-info"><i class="mdi mdi-eye"></i></a>
                        <a href="/dashboard/pendaftaran/{{ $pasien->no_rm }}/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
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