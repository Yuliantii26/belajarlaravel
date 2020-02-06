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

Route::get('testmodel',function(){ 
    $testmodel= App\Post::all();
    return $testmodel;
});

Route::get('testmodel1',function(){ 
    $testmodel=App\Post::find(1);
    return $testmodel;
});

Route::get('testmodel2',function(){ 
    $testmodel=App\Post::where('title','like','%Belajar tajwid%')->get();
    return $testmodel;
});

Route::get('testmodel3',function(){ 
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('testmodel4',function(){ 
    $post = App\Post::find(1);
    $post->delete();
    return $post;
});

Route::get('testmodel5',function(){
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

Route::get('gaji',function(){ 
    $query= App\Penggajihan::all();
    return $query;
});

Route::get('gaji-1',function(){
    $query = App\Penggajihan::where('agama','=','islam')->get();
    return $query; 
});

Route::get('gaji-2',function(){
    $query = App\Penggajihan::select('id','nama','agama')->where('agama','=','islam')->get();
    return $query;
});

Route::get('gaji/{id}',function($id){
    $query = App\Penggajihan::findOrFail($id);
    return $query;
});

Route::get('tambah-gaji',function()
{
    $gaji = New App\Penggajihan();
    $gaji->nama = 'indah';
    $gaji->jabatan = 'sekretaris';
    $gaji->jk = 'perempuan';
    $gaji->alamat = 'rancamanyar';
    $gaji->agama = 'islam';
    $gaji ->total_gaji = 500000;
    $gaji->save();
    return $gaji;
});
Route::get('halo','SekolahController@hallo');
Route::get('dunia','SekolahController@dunia');
Route::get('haha','SekolahController@pagi');
Route::get('wkwk','SekolahController@hahaha');
Route::get('warnakucing/{warna?}','SekolahController@jeniskucing');
Route::get('beli/{menu?}/{harga?}','SekolahController@warungnasi');

//CRUD BOOK
Route::get('book','BookController@index');
Route::get('book-create/{jdl}','BookController@create');
Route::get('book/{id}','BookController@show');
Route::get('book-edit/{id}/{jdl}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');

//Artikel RESOURCE
// Route::get('artikel','ArtikelController@index');
// Route::get('artikel/create','ArtikelController@create');
// Route::get('artikel/{id}','ArtikelController@show');
// Route::get('artikel/{id}/edit','ArtikelController@edit');
// Route::PUT('artikel/{id}','ArtikelController@update');
// Route::DELETE('artikel/{id}','ArtikelController@destroy');
Route::resource('artikel','ArtikelController');


//Passing Data 
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('passing2','PracticeController@pass2');
Route::get('barang1','BarangController@index');

//Book Route
Route::resource('buku','BookController');
Route::resource('barang','BarangController');

//Blade
Route::get('home',function(){
    return view('home');
});

Route::get('about',function () {
    return view('about');
});



