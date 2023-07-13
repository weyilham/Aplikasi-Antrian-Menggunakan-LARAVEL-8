@extends('dashboard.layouts.main')

@section('container')

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Pendaftaran Pasien Baru
      </h3> 
    </div>

    <div class="row">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            
            <form action="/dashboard/pendaftaran" method="post">
              @csrf
              <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap : </label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama Lengkap" value="{{ old('nama') }}" autofocus>
              @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>
  
              <div class="mb-3 col-md-4">
                  <label for="ttl" class="form-label">Tanggal Lahir : </label>
                  <input type="date" class="form-control  @error('ttl') is-invalid @enderror" name="ttl" id="ttl" value="{{ old('ttl') }}">
              @error('ttl')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>
  
              <div class="mb-3 col-md-4">
                  <label for="jk" class="form-label">Jenis Kelamin : </label>
                  <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jk">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              @error('jenis_kelamin')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="no_ktp" class="form-label">No KTP : </label>
                <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" id="no_ktp" placeholder="Masukan No KTP" value="{{ old('no_ktp') }}">
                @error('no_ktp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>

              <div class="mb-3 col-md-6">
                <label for="no_hp" class="form-label">No Handphone : </label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" placeholder="Masukan NO Handphone" value="{{ old('no_hp') }}">
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                

                <div class="mb-3 col-md-6">
                  <label for="pj" class="form-label">Penganggung Jawab : </label>
                  <input type="text" class="form-control @error('pj') is-invalid @enderror" name="pj" id="pj" placeholder="Masukan Nama Penanggung Jawab" value="{{ old('pj') }}">
                  @error('pj')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>

                <div class="mb-3 col-md-6">
                  <label for="no_pj" class="form-label">Nomor HP Penganggung Jawab : </label>
                  <input type="text" class="form-control @error('no_pj') is-invalid @enderror" name="no_pj" id="no_pj" placeholder="Masukan Nama Penanggung Jawab" value="{{ old('no_pj') }}">
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
                  <option value="Single">Single</option>
                  <option value="Berumah Tangga">Berumah Tangga</option>
                  <option value="Pelajar">Pelajar</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               </div>
  
              <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control  @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" id="alamat" style="height: 100px"></textarea>
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
                  <option selected>Pilih pendidikan</option>
                  <option value="SMA">SMA</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
                @error('pendidikan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
               </div>

               <div class="mb-3 col-md-6">
                <label for="pekerjaan" class="form-label">Pekerjaan : </label>
                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="pekerjaan" placeholder="Masukan pekerjaan Lengkap" value="{{ old('pekerjaan') }}">
                @error('pekerjaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3 col-md-4">
                  <label for="agama" class="form-label">Agama : </label>
                  <select class="form-select @error('agama') is-invalid @enderror" name="agama" id="agama">
                    <option selected>Pilih agama</option>
                    <option value="ISLAM">ISLAM</option>
                    <option value="KRISTEN">KRISTEN</option>
                    <option value="HINDU">HINDU</option>
                    <option value="BUDHA">BUDHA</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                  @error('agama')
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