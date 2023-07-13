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
                        <form action="/dashboard/antrian" class="input-group">
                            <div class="col-md-6">
                                <select class="form-select loket mb-3" name="id_loket">
                                    <option selected disabled>Pilih Loket</option>
                                    @foreach ($loket as $l)
                                    @if ($l->id == request('id_loket'))    
                                    <option value="{{ $l->id }}" selected>{{ $l->nama_loket }}</option>
                                    @else
                                    <option value="{{ $l->id }}">{{ $l->nama_loket }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-sm btn-info mx-2">Pilih</button>
                                <a href="/loket-antrian" class="btn btn-sm btn-danger" target="_blank" rel="noopener noreferrer">Loket Antrian</a>
                                <a href="/plasma" class="btn btn-sm btn-success" target="_blank" rel="noopener noreferrer">lihat plasma antrian</a>
                            </div>
                        </form>
                    </div>
                    
                @if ($antrian)
                <table class="table table-responsive table-bordered">
                    <thead class="table-info">
                        <tr class="text-center">
                            <th>No</th>
                            <th>No Antrian</th>
                            <th>Loket</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($antrian as $index => $a)
                        <tr class="{{ $a->status == 1 ? 'table-danger' : '' }}" id="rowId{{ $a->id }}">
                            <td width="50">{{ $loop->iteration }}</td>
                            <td>{{ $a->no_antrian }}</td>
                            <td>{{ $a->loket->deskripsi }}</td>
                            <td>
                                @if ($a->status === 0)
                                    Belum 
                                @else
                                    Sudah
                                @endif
                            </td>
                            <td width="250" class="tombolAksi">
                                <a href="" class="btn btn-sm btn-danger tombolPrevious" data-tipe="previous" data-id="{{ $a->id }}"><i class="mdi mdi-skip-previous"></i></a>
                                <a href="" class="btn btn-sm btn-success tombolPanggil" data-id="{{ $a->id }}"><i class="mdi mdi-bell-ring"></i> Panggil</a>
                                <a href="" class="btn btn-sm btn-danger tombolNext" data-tipe="next" data-id="{{ $a->id }}"><i class="mdi mdi-skip-next"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                @endif
                
              </div>
            </div>
        </div>

    </div>


    <script>
        const elements = document.getElementsByClassName('tombolNext')
        const bg = document.querySelectorAll('#bgTable')
        const tombolNext = document.querySelectorAll('.tombolNext')
        const tombolPrevious = document.querySelectorAll('.tombolPrevious')
        const tombolPanggil = document.querySelectorAll('.tombolPanggil')
        // const loket = document.querySelector('.loket')

        // console.log(loket)
        // loket.addEventListener('change', function(e) {
        //     fetch(`/dashboard/antrian/${loket.value}`).then(response => response.text()).then(response => {
        //         document.querySelector('.table').innerHTML = response
        //     })
        // })
        tombolNext.forEach(element => {
            element.addEventListener('click', function(e){
                e.preventDefault();
                const id = element.getAttribute('data-id')
                const tipe = element.getAttribute('data-tipe')

                fetch(`/dashboard/antrian/${id}/${tipe}`).then(response => response.json()).then(response => {
                    const rowId = document.getElementById('rowId'+response.id)
                    const tdId = document.querySelector('#rowId'+response.id+' td:nth-child(4)')
                    rowId.classList.add('table-danger')
                    tdId.innerHTML = response.status == 0 ? 'Belum' : 'Sudah'                    
                })
                

                // console.log(e.target.classList)

                
            })
        });

        tombolPrevious.forEach(element => {
            element.addEventListener('click', function(e){
                e.preventDefault();
                const id = element.getAttribute('data-id')
                const tipe = element.getAttribute('data-tipe')
                
                fetch(`/dashboard/antrian/${id}/${tipe}`).then(response => response.json()).then(response => {
                    const rowId = document.getElementById('rowId'+response.id)
                    const tdId = document.querySelector('#rowId'+response.id+' td:nth-child(4)')
                    rowId.classList.remove('table-danger')
                    tdId.innerHTML = response.status == 0 ? 'Belum' : 'Sudah'                    
                })
                

                // console.log(e.target.classList)

                
            })
        });

        tombolPanggil.forEach(element => {  
            element.addEventListener('click', function(e){
                e.preventDefault()
                console.log(playAudio())
            })
        });

        function playAudio() {
            var sound = new Audio(`../sound/sound.wav`);
            sound.play();
        }

        
        
        
        
        
        
        // for (i = 0; i < elements.length; ++i) {
        //  elements[i].addEventListener('click', function(e){
        // e.preventDefault()
        
        // bg.classList.add('table-danger')
        
        
        //     })
        // }
        // console.log(tombol[0].getAttribut('data-tombol'))
    </script>

@endsection