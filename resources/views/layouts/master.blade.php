<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
    <a href = "/home">Home</a>
    <a href = "/about">About</a>
    <a href = "/contact">Contact</a>
    <a href = "/buku">Buku</a>
    <a href = "/barang">Barang</a>
    
    </nav>
    
    {{-- Tempat Konten Dinamis --}}
    @yield('Konten')
    {{-- Akhir Tempat Konten Dinamis --}}

    <footer>SMK ASSALAAM</footer>
</body>
</html>