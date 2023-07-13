@extends('dashboard.layouts.main')


@section('container')

  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Registrasi Pasien
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">{{ $pasien->no_rm . ' - ' .  $pasien->nama }}</h4>
          </div>
          
          <div class="row">
            <div class="col-md-2">
                <img src="/vendors/assets/images/faces/face1.jpg" alt="profile" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                      Data Pasien {{ $pasien->nama }}
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Nama : </strong> {{ $pasien->nama }}</li>
                      <li class="list-group-item"><strong>No HP : </strong> {{ $pasien->no_hp }}</li>
                      <li class="list-group-item"><strong>No KTP : </strong> {{ $pasien->no_ktp }}</li>
                      <li class="list-group-item"><strong>Tanggal Lahir : </strong> {{ $pasien->ttl }}</li>
                      <li class="list-group-item"><strong>Jenis Kelamin : </strong> {{ $pasien->jenis_kelamin }}</li>
                      <li class="list-group-item"><strong>Agama : </strong> {{ $pasien->agama }}</li>
                      <li class="list-group-item"><strong>Status : </strong> {{ $pasien->status }}</li>
                      <li class="list-group-item"><strong>Alamat : </strong> {{ $pasien->alamat }}</li>
                      <li class="list-group-item"><strong>Pendidikan : </strong> {{ $pasien->pendidikan }}</li>
                      <li class="list-group-item"><strong>Pekerjaan : </strong> {{ $pasien->pekerjaan }}</li>
                      <li class="list-group-item"><strong>Penanggung Jawab : </strong> {{ $pasien->pj }}</li>
                      <li class="list-group-item"><strong>No Penanggung Jawab : </strong> {{ $pasien->no_pj }}</li>


                    </ul>

                    
                  </div>
                  {{-- @dd($registrasi->dokter->nama_dokter) --}}
                  <a href="/dashboard/pendaftaran" class="btn btn-sm btn-success mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>
                  <a href="/dashboard/pendaftaran/{{ $pasien->no_rm }}/edit" class="btn btn-sm btn-info mt-2"> Edit Data <i class="mdi mdi-pen"></i>  </a>

                

            </div>

            <div class="col-md">
                <div class="card">
                    <div class="card-header mb-3">
                      <strong>Pilih Layanan</strong> 
                    </div>
                    @if ($registrasi)
                    <div class="alert alert-danger text-center" role="alert">
                      Pasien Sudah Teregistrasi di <strong>{{ $registrasi->layanan->nama_layanan }}</strong> 
                    </div>
                    @else
                    <form action="/dashboard/regpasien" method="post">
                      @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                        <input type="hidden" name="no_rm" value="{{ $pasien->no_rm }}">
                        <div class="mb-3 row">
                            <label for="layanan" class="col-sm-3 col-form-label">Layanan</label>
                            <div class="col-sm-9">
                                <select class="form-select @error('layanan') is-invalid @enderror" name="layanan_id" id="layanan">
                                    <option selected disabled>Pilih Layanan</option>
                                   @foreach ($layanan as $l)
                                   <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                                   @endforeach
                                    {{-- <option value="Perempuan">Perempuan</option> --}}
                                  </select>
                              @error('layanan')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <label for="dokter" class="col-sm-3 col-form-label">Dokter</label>
                            <div class="col-sm-9">
                                <select class="form-select @error('dokter') is-invalid @enderror" name="dokter_id" id="dokter">
                                    <option selected disabled>Pilih Dokter</option>
                                    @foreach ($dokter as $dr)
                                     <option value="{{ $dr->id }}">{{ $dr->nama_dokter }}</option>                                      
                                    @endforeach
                                  </select>
                              @error('dokter')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tipe_pasien" class="col-sm-3 col-form-label">Tipe Pasien</label>
                            <div class="col-sm-9">
                                <select class="form-select @error('tipe') is-invalid @enderror" name="tipe_pasien" id="tipe_pasien">
                                    <option selected disabled>Pilih Tipe Pasien</option>
                                    <option value="BPJS">BPJS</option>
                                    <option value="Umum">Umum</option>           
                                  </select>
                              @error('tipe')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>

                        <div class="mb-3 row show-bpjs" style="display: none">
                          <label for="no_bpjs" class="col-sm-3 col-form-label">No BPJS : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('no_bpjs') is-invalid @enderror" name="no_bpjs" id="no_bpjs" placeholder="Masukan No BPJS" value="{{ old('no_bpjs') }}">
                          @error('no_bpjs')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                          
                        </div>

                        <button type="submit" class="btn btn-sm btn-info mt-2"> Registrasi <i class="mdi mdi-book"></i>  </button>
                        <a href="/dashboard/pendaftaran" class="btn btn-sm btn-danger mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>

                    </form>
                    @endif
                </div>



            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

    const tipePasien = document.getElementById('tipe_pasien')
    const inputBpjs = document.querySelector('.show-bpjs')

    // console.log(tipePasien.value  == 'BPJS')


    // console.log(tipePasien.value);
    tipePasien.addEventListener('change', function(e){
      // if(e.value == 'BPJS'){
      if(e.target.value == 'BPJS'){
        inputBpjs.style.display=''
      } else if(e.target.value=='Umum'){
        inputBpjs.style.display= 'none'
      }
    })


  </script>
@endsection