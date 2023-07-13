@extends('dashboard.layouts.main')

@section('container')
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Data Dokter
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Daftar Data Dokter</h4>
            <a href="/dashboard/dokter/create" class="btn btn-sm btn-info mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data dokter</a>
          </div>
          
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
          <strong>{{ session('success') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <div class="table-responsive col-md">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width='50'>No</th>
                  <th width='50'>Nama Dokter</th>
                  <th>Nama Spesialis</th>
                  <th>Alamat</th>
                  <th width='50'>Action</th>
                </tr>
              </thead>
              {{-- @dd($dokter) --}}
              <tbody>
                @foreach ($dokter as $l)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $l->nama_dokter }}</td>
                    <td>{{ $l->spesialis }}</td>
                    <td>{{ $l->alamat }}</td>

                   
                    <td>
                      <a href="/dashboard/dokter/{{ $l->id }}" class="badge bg-info"><i class="mdi mdi-eye"></i></a>

                      <a href="/dashboard/dokter/{{ $l->id }}/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
                      <form action="/dashboard/dokter/{{ $l->id }}" method="post" class="d-inline">
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