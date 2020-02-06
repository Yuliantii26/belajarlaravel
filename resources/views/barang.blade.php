@extends('layouts.master')
@section('konten')
    <center>Data Barang </center>
    @foreach($dabar as $data)
    Nama           : {{$data->nama}}<br>
    Kode Barang    : {{$data->kode}}<br>
    Harga Barang   : Rp. {{$data->harga}}<br>
    <img src="{{$data->foto}}" alt="">
    <hr>
    @endforeach
