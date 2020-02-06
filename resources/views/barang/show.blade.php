<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>Show Data</legend>
    Kode : <b>{{$barang->kode}}</b><br>
    Nama : <b>{{$barang->nama}}</b><br>
    Harga :  <b>{{$barang->harga}}</b><br>
    Foto : <img scr="{{$barang->foto}}" alt="">
    </fieldset>         

</body>
</html>