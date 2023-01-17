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
            <td>{{ $a->loket->nama_loket }}</td>
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