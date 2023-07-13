@extends('dashboard.layouts.main')

@section('container')

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Data Loket
      </h3> 
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            
            <div class="card-body">
              <div class="clearfix">
                <h4 class="card-title float-left">Daftar Data Loket</h4>
                
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
                      <th>Nama Loket</th>
                      <th>Kode</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($loket as $L)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $L->nama_loket }}</td>
                        <td>{{ $L->kode }}</td>
                        <td>{{ $L->deskripsi }}</td>
                        
                        
    
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