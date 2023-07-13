@extends('dashboard.layouts.main')

@section('container')

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span>Edit Data Pasien
      </h3> 
    </div>


    <div class="row">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            
            <form action="/dashboard/pendaftaran/{{ $pasien[0]['id'] }}" method="post">
              @method('put')
              @csrf
              <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap : </label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama Lengkap" value="{{ old('nama', $pasien[0]['nama']) }}" autofocus>
              @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>
  
              <div class="mb-3 col-md-4">
                  <label for="ttl" class="form-label">Tanggal Lahir : </label>
                  <input type="date" class="form-control  @error('ttl') is-invalid @enderror" name="ttl" id="ttl" value="{{ old('ttl', $pasien[0]['ttl']) }}">
              @error('ttl')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>
  
              <div class="mb-3 col-md-4">
                  <label for="jk" class="form-label">Jenis Kelamin : </label>
                  <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jk">
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <?php $jk = ['Laki-laki', 'Perempuan'] ?>

                    @foreach ($jk as $j)
                    <option value="{{ $j }}" {{ $j == $pasien[0]['jenis_kelamin'] ? 'selected' : '' }}>{{ $j }}</option>
                        
                    @endforeach
                    
                  </select>
              @error('jenis_kelamin')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="no_ktp" class="form-label">No KTP : </label>
                <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" id="no_ktp" placeholder="Masukan No KTP" value="{{ old('no_ktp', $pasien[0]['no_ktp']) }}">
                @error('no_ktp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="no_hp" class="form-label">No Handphone : </label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" placeholder="Masukan NO Handphone" value="{{ old('no_hp', $pasien[0]['no_hp']) }}">
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                

                <div class="mb-3 col-md-6">
                  <label for="pj" class="form-label">Penganggung Jawab : </label>
                  <input type="text" class="form-control @error('pj') is-invalid @enderror" name="pj" id="pj" placeholder="Masukan Nama Penanggung Jawab" value="{{ old('pj', $pasien[0]['pj']) }}">
                  @error('pj')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>

                <div class="mb-3 col-md-6">
                  <label for="no_pj" class="form-label">Nomor HP Penganggung Jawab : </label>
                  <input type="text" class="form-control @error('no_pj') is-invalid @enderror" name="no_pj" id="no_pj" placeholder="Masukan Nama Penanggung Jawab" value="{{ old('no_pj', $pasien[0]['no_pj']) }}">
                  @error('no_pj')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>

              <div class="mb-3 col-md-4">
                <label for="status" class="form-label">Status : </label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                  <option selected>Pilih Status</option>
                  <?php $status = ['Single', 'Berumah Tangga', 'Pelajar'] ?>
                  @foreach ($status as $j)
                    <option value="{{ $j }}" {{ $j == $pasien[0]['status'] ? 'selected' : '' }}>{{ $j }}</option>
                        
                    @endforeach

                </select>
                @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               </div>
  
              <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control  @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" id="alamat" style="height: 100px"> {{ old('alamat', $pasien[0]['alamat'])  }} </textarea>
                    <label for="floatingTextarea2">Alamat</label>
                  </div>
              @error('alamat')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>

              <div class="mb-3 col-md-4">
                <label for="pendidikan" class="form-label">Pendidikan : </label>
                <select class="form-select @error('pendidikan') is-invalid @enderror" name="pendidikan" id="pendidikan">
                  <option disabled selected>Pilih pendidikan</option>
                  <?php $pendidikan = ['SMA', 'S1', 'S2', 'S3', 'Lainnya'] ?>
                  @foreach ($pendidikan as $j)
                    <option value="{{ $j }}" {{ $j == $pasien[0]['pendidikan'] ? 'selected' : '' }}>{{ $j }}</option>       
                  @endforeach

                </select>
                @error('pendidikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               </div>

               <div class="mb-3 col-md-6">
                <label for="pekerjaan" class="form-label">Pekerjaan : </label>
                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="pekerjaan" placeholder="Masukan pekerjaan Lengkap" value="{{ old('pekerjaan', $pasien[0]['pekerjaan']) }}">
                @error('pekerjaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3 col-md-4">
                  <label for="agama" class="form-label">Agama : </label>
                  <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama">
                    <option disabled selected>Pilih agama</option>
                   <?php $agama = ['ISLAM', 'KRISTEN', 'HINDU', 'BUDHA', 'LAINNYA']; ?>
                    @foreach ($agama as $j)
                        <option value="{{ $j }}" {{ $j == $pasien[0]['agama'] ? 'selected' : '' }}>{{ $j }}</option>    
                    @endforeach
                   
                  </select>
                  @error('agama')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                 </div>

               
  
              <button type="submit" class="btn btn-gradient-info btn-sm mt-2">Edit Data</button>
                
            </form>
            
          </div>
        </div>
      </div>
    </div>
    
@endsection