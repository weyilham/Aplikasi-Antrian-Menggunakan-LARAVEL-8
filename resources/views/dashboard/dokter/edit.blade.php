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
            <h4 class="card-title float-left">Edit Data Dokter</h4>
          </div>
          
          <form action="/dashboard/dokter/{{ $dokter->id }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_dokter" class="form-label">Nama dokter : </label>
                <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" id="nama_dokter" placeholder="Nama dokter" value="{{ old('nama_dokter', $dokter->nama_dokter ) }}" required>
            @error('nama_dokter')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3 col-md">
              <label for="spesialis" class="form-label">Pilih Spesialis : </label>
              <select class="form-select @error('spesialis') is-invalid @enderror" name="spesialis" id="spesialis">
                <option selected disabled>Pilih Spesialis : </option>
                @foreach ($spesialis as $s)
                <option value="{{ $s }}" {{ $s == $dokter->spesialis ? 'selected' : ''}}>{{ $s }}</option>
                    
                @endforeach
                
              </select>
          @error('spesialis')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>

          <div class="mb-3 col-md">
            <label for="layanan" class="form-label">Pilih Layanan : </label>
            <select class="form-select @error('layanan_id') is-invalid @enderror" name="layanan_id" id="layanan">
              <option selected disabled>Pilih Layanan : </option>
              @foreach ($layanan as $l )
                <option value="{{ $l->id }}" {{ $l->id == $dokter->layanan_id ? 'selected' : '' }}>{{ $l->nama_layanan }}</option>
              @endforeach
             
              
            </select>
        @error('layanan_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>

          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir : </label>
            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" id="tgl_lahir" placeholder="Nama dokter" value="{{ old('tgl_lahir', $dokter->tgl_lahir) }}" required>
        @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>



      <div class="mb-3">
        <label for="no_hp" class="form-label">No Handphone : </label>
        <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" placeholder="Nama dokter" value="{{ old('no_hp', $dokter->no_hp) }}" required>
        @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>


      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat : </label>
        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="3" >{{ old('no_hp', $dokter->alamat) }}</textarea>
        @error('alamat')
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