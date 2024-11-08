<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-center">Daftar Buku</h1>
    @foreach ($buku as $item )
        <span>{{$item['judul']}}</span>
        <span>{{$item['halaman']}}</span>
        <span>{{$item['penulis']}}</span>
        <br>
    @endforeach
</body>
</html>