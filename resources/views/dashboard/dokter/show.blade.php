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
            <h4 class="card-title float-left">Detail Data Dokter</h4>
          </div>
          
          <div class="row">
            <div class="col-md-2">
                <img src="/vendors/assets/images/faces/face1.jpg" alt="profile" class="img-fluid rounded">
            </div>
            <div class="col-md-10">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="100">Nama Dokter</th>
                            <td width="10"> : </td>
                            <td> {{ $dokter->nama_dokter }}</td>
                        </tr>
                        <tr>
                            <th width="100">Spesialis</th>
                            <td width="10"> : </td>
                            <td> {{ $dokter->spesialis }}</td>
                        </tr>
                        <tr>
                            <th width="100">Layanan</th>
                            <td width="10"> : </td>
                            <td> {{ $dokter->layanan->nama_layanan }}</td>
                        </tr>
                        <tr>
                            <th width="100">Tanggal Lahir</th>
                            <td width="10"> : </td>
                            <td>
                                {{ $dokter->tgl_lahir }}
                            </td>
                        </tr>

                        <tr>
                            <th width="100">No Handphone</th>
                            <td width="10"> : </td>
                            <td>
                                {{ $dokter->no_hp }}
                            </td>
                        </tr>

                        <tr>
                            <th width="100">Alamat</th>
                            <td width="10"> : </td>
                            <td>
                                {{ $dokter->tgl_lahir }}
                            </td>
                        </tr>
                    </thead>
                </table>

                <a href="/dashboard/dokter" class="btn btn-sm btn-success mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>
            </div>
          </div>
          
      </div>
    </div>
  </div>
@endsection