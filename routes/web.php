<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return '<h1>Hallo</h1>'.
    'Selamat Datang diwebapp saya<br>'.
    'laravel,emang keren.';
});

Route::get('profil',function()
{
    return view('biodata');
});

// Route::get('profil2',function()
// {
//     return view('sekolah');
// });

// Route::get('profil3',function()
// {
//     return view('rumah');
// });

// Route::get('profil4',function()
// {
//     return view('kampus');
// });

// Route::get('profil5',function()
// {
//     return view('pasar');
// });

//Route Parameter
Route::get('pesan/{makan}/{minum}/{harga}/',function($mkn,$mnm,$hrg)
{
    return 'Makanan Yang Saya Pesan adalah'.$mkn.'<br>'
    . 'Minumanya '.$mnm.'<br>'
    . 'Harganya  '.$hrg.'<br>';
});

//Rout Optional Parameter 
Route::get('pesan/{a?}/{b?}/{c?}',function($mkn = null,$minum=null,$harga=null){
    if(isset($mkn)){
        $mkn = "Anda Memesan $mkn";
        echo $mkn;
    }
    if(isset($minum)){
        $minum = "& $minum";
        echo $minum;
    }
    if(isset($harga)){
        $harga = "Dengan Harga $harga";
        echo $harga;
    }
    if(!$mkn && !$minum && !$harga)
    return "Anda Belum Memesan sesuatu ";
});

