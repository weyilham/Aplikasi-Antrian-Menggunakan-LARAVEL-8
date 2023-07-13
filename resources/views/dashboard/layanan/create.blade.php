@extends('dashboard.layouts.main')

@section('container')
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Form Layanan
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Tambah Data Layanan</h4>
          </div>
          
          <form action="/dashboard/layanan" method="post" class="col-6">
            @csrf
            <div class="mb-3">
                <label for="kd_layanan" class="form-label">kode Layanan : </label>
                <input type="text" class="form-control @error('kd_layanan') is-invalid @enderror" name="kd_layanan" id="kd_layanan" placeholder="ex : gigi, kia, obgin, anak" value="{{ old('kd_layanan') }}" required autofocus>
            @error('kd_layanan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="nama_layanan" class="form-label">Nama Layanan : </label>
                <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" name="nama_layanan" id="nama_layanan" placeholder="Nama Layanan" value="{{ old('nama_layanan') }}" required>
            @error('nama_layanan')
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