<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
    </style>
</head>
<body>
    {{-- @dd($tiket[0]->loket->deskripsi); --}}
    <div class="container" style="width: 300px; border: 1px; text-align: center; padding: 20px;">
        <h6 style="font-size: 25px; margin: 0%">{{ $tiket[0]->loket->deskripsi }}</6>
        <h1 style="font-size: 100px; margin: 0;">{{ $tiket[0]->no_antrian }}</h1>
        <h6 style="font-size: 25px; margin: 0%">Loket {{ $tiket[0]->loket->id }}</h6>

    </div>
    <script>
        window.print();
    </script>
</body>
</html>