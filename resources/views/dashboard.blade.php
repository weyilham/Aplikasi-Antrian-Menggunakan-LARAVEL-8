
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Sistem Aplikasi Antrian</title>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="/img/logo.png" width="40" alt=""><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4"> Puskesmas Kota Serang</span>
      </a>
    </header>

    <div class="row align-items-md-stretch mb-2">
      {{-- @dd($loket) --}}
      @foreach ($loket as $l)  
        <div class="col-md-6">
          <div class="h-100 p-5 {{ $l->id == 1 ? 'bg-success' : 'bg-primary' }} text-white rounded-3">
            <h2>Antrian {{ $l->deskripsi }}</h2>
            <p>Klik tombol dibawah untuk mencetak antrian {{ $l->deskripsi }}</p>
            <a href="/antrian/{{ str_replace(' ', '_', strtolower($l->deskripsi)) }}/{{ $l->id }}" target="_blank" class="btn btn-outline-light btn-lg btn-block" id="cetakUmum"><i class="fa-solid fa-print"></i> Cetak Antrian</a>
          </div>
        </div>
      @endforeach
      
    
    
    
  </div>
</main>

<div class="container-fluid">
    
    <footer class="py-4 text-muted border-top" style="position: absolute; bottom: 0">
        &copy; <?= date('Y'); ?>
    </footer>    
</div>


    

<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  const cetakUmum = document.querySelector('#cetakUmum')

  // console.log(cetakUmum)

function cetak() {
  cetakUmum.addEventListener('click', function(e){
    e.preventDefault()
    // window.print()
    fetch.
  })
}
  
</script>
  </body>
</html>
