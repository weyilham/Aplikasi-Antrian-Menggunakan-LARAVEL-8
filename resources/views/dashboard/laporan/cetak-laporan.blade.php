<!DOCTYPE html>
<html lang="en" >
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Kunjungan Pasien</title>
    <style>
        body{
            background-color: #eaeaea;
        }
        h1{
            text-align: center;
        }
        .styled-table {

            border-collapse: collapse;
            margin: 25px auto;
            font-size: 0.9em;
            font-family: sans-serif;
            width: 80%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .error{
            background-color: rgb(216, 75, 75);
            width: 80% ;
            /* text-align: center; */
            margin: auto;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .btn-print{
            /* margin: 20px auto; */
            display: inline-block;
            padding: 10px 20px;
            background-color: #da0505;
            border: none;
            border-radius: 5px;
            color: white;
        }




    </style>
</head>
<body>
    @if (count($bulan) < 1)   
        <h1 class="error">Data Kunjungan Yang di Masukan Belum Tersedia</h1>
    @else
    
    <h1>LAPORAN KUNJUNGAN PASIEN</h1>
    <div class="table-laporan">
  
        <table class="styled-table">
            <thead>
                <tr class="table-head">
                    <th>No</th>
                    <th>No RM</th>
                    <th>No Registrasi</th>
                    <th>Nama Pasien</th>
                    <th>Kunjungan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Tipe Pasien</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($bulan as $b)
                <tr class="table-row">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->pendaftaran->no_rm  }}</td>
                    <td>{{ $b->noregistrasi  }}</td>
                    <td>{{ $b->pendaftaran->nama  }}</td>
                    <td>{{ $b->layanan->nama_layanan  }}</td>
                    <td>{{ $b->created_at->format('d M Y')  }}</td>
                    <td>{{ $b->tipe_pasien  }}</td>                
                </tr>
                @endforeach
                <tr>
                    <th colspan="6" style="text-align: right; font-size: 16px">JUMLAH KUNJUNGAN BULAN INI : </th>
                    <th style="font-size: 16px">{{ count($bulan) }} Pasien</th>
                </tr>
        </tbody>

        </table>
    </div>
    @endif

</body>
</html>