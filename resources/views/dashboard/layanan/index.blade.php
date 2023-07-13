@extends('dashboard.layouts.main')

@section('container')
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Data Layanan
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Daftar Layanan</h4>
            <a href="/dashboard/layanan/create" class="btn btn-sm btn-info mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data Layanan</a>
          </div>
          
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
          <strong>{{ session('success') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <div class="table-responsive col-8">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width='50'>No</th>
                  <th width='50'>Kode Layanan</th>
                  <th>Nama Layanan</th>
                  <th width='50'>Action</th>
                </tr>
              </thead>
              {{-- @dd($layanan) --}}
              <tbody>
                @foreach ($layanan as $l)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $l->kd_layanan }}</td>
                    <td>{{ $l->nama_layanan }}</td>
                   
                    <td>
                      <a href="/dashboard/layanan/{{ $l->kd_layanan }}/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
                      <form action="/dashboard/layanan/{{ $l->id }}" method="post" class="d-inline">
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