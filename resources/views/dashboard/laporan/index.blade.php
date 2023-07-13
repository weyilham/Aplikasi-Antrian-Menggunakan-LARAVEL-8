@extends('dashboard.layouts.main')

@section('container')
{{-- @dd($bulan) --}}

  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Laporan Kunjungan
    </h3> 
  </div>
  <div class="row">
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Laporan data antrian per poliklinik</h4>
            </div>



            
              <form action="/dashboard/laporan/cetak" method="post">
                @csrf
           
                <div class="mb-3 col-md-6">
                    <label for="bulan" class="form-label">Pilih Bulan : </label>
                    <select class="form-select @error('bulan') is-invalid @enderror" name="bulan" id="bulan">
                      <option selected disabled>Pilih bulan : </option>             
                      @foreach ($bulan as $key => $bln)
                     <option value="{{ ($key+1 >= 10 ? '' : '0') . $key+1 }}" {{ $key+1 == date('m') ? 'selected' : '' }} >{{ $bln }}</option>             
                     @endforeach
                       
                    </select>
                @error('bulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3 col-md-6">
                  <label for="layanan" class="form-label">Pilih Layanan : </label>
                  <select class="form-select @error('layanan') is-invalid @enderror" name="layanan" id="layanan">
                    <option selected disabled>Pilih Layanan : </option>             
                    @foreach ($layanan as $l)
                   <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>             
                   @endforeach
                     
                  </select>
              @error('layanan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>

                <button type="submit" class="btn btn-info btn-cari-laporan">Cetak Laporan</button>
         
              </form>
            
          </div>
        </div>
      </div>
    
  </div>

 
@endsection


