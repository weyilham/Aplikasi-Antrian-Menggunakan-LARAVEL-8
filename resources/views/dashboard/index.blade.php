@extends('dashboard.layouts.main')

@section('container')

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Dashboard
      </h3> 
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Jumlah Pasien Hari ini <i class="mdi mdi-account mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{ count($pasien) }} Orang</h2>
            <h6 class="card-text">Pasien</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3"> Jumlah Antrian Hari ini <i class="mdi mdi-desktop-mac mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{ count($antrian) }} Antrian </h2>
            <h6 class="card-text">Bpjs & Umum</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="/vendors/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Jumlah Dokter <i class="mdi mdi mdi-account-multiple mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">{{ count($dokter) }} Orang</h2>
            <h6 class="card-text">Dokter</h6>
          </div>
        </div>
      </div>
    </div>

@endsection