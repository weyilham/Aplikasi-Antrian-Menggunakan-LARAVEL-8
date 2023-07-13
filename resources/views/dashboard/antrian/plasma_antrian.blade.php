@extends('dashboard.layouts.main')

@section('container')

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Data Antrian Pasien
      </h3> 
    </div>
  

    <div class="row">
        {{-- @dd($antrian) --}}

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card"> 
                
              <div class="card-body">

                    <div class="col-lg-8 mb-2">
                        <form action="/dashboard/get-plasma" method="POST" class="input-group">
                          @csrf
                            <div class="col-md-6">
                                <select class="form-select loket mb-3" name="layanan_id">
                                    <option selected disabled>Pilih Antrian POLI</option>
                                    @foreach ($poli as $l)
                
                                    <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                               
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-sm btn-info mx-2">Lihat Plasma</button>
                
                            </div>
                        </form>
                    </div>
                
                
              </div>
            </div>
        </div>

    </div>


    <script>
       

    </script>

@endsection