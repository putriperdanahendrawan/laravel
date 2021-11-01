<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route
Route::get('tentang', function(){
    return '<h1>hello</h1>'
    .'selamat datang di whatsaap saya <br>'
    .'laravel emang keren';
});

Route::get('saya', function(){
    //me-return view ke file bernama 'profile'
    $mamat= 'Mamat Abdullah';
    return view('profile', compact ('mamat'));
});

Route::get('kimsoohyun', function(){
    //me-return view ke file bernama 'profile'
    $nama= "kim soohyun";
    $tinggi="186";
    $usia = "33 tahun";
    $agama = "islam";
    $alamat = "seoul";
    return view('bio', compact ('nama','tinggi','usia','agama','alamat'));
});

Route::get('leeminho', function(){
    //me-return view ke file bernama 'profile'
    $nama= "lee minho";
    $tinggi="189";
    $usia = "34 tahun";
    $agama = "kristen";
    $alamat = "busan";
    return view('bio', compact ('nama','tinggi','usia','agama','alamat'));
});

Route::get('Dokyungso', function(){
    //me-return view ke file bernama 'profile'
    $nama= "Do Kyung Soo";
    $tinggi="180";
    $usia = "29 tahun";
    $agama = "budha";
    $alamat = "pulau jeju";
    return view('bio', compact ('nama','tinggi','usia','agama','alamat'));
});

Route::get('shinhyesun', function(){
    //me-return view ke file bernama 'profile'
    $nama= "shin hye sun";
    $tinggi="176";
    $usia = "32 tahun";
    $agama = "konghucu";
    $alamat = "gangnam";
    return view('bio', compact ('nama','tinggi','usia','agama','alamat'));
});
Route::get('lalisa', function(){
    //me-return view ke file bernama 'profile'
    $nama= "lalisa";
    $tinggi="170";
    $usia = "25 tahun";
    $agama = "hindu";
    $alamat = "thailand";
    return view('bio', compact ('nama','tinggi','usia','agama','alamat'));
});

//route parameter
Route :: get ('posting/{id}', function ($a){
    return "halaman posting ke - <b>$a</b>";
});

//route parameter
Route :: get ('data/{nama}/{alamat}/{ttl}/{tb}/{bb}', function ($nama,$alamat,$ttl,$tb,$bb){
    return view ('data', compact ('nama','alamat','ttl','tb','bb'));
});

Route::get ('testmodel',function(){
    $query =App\Models\Post::all();
    return  $query;
});

Route::get ('testmodel/{id}',function($id){
    $query =App\Models\Post::find($id);
    return  $query;
});

Route::get ('testmodel-cari/{search}',function($s){
    $query =App\Models\Post::where('title','like',"%$s%")
    -> get();
    return  $query;
});

Route::get ('testmodel-update',function(){
    $query =App\Models\Post::find(2);
    $query -> title = "bane si bajak laut";
    $query -> save();
    return $query;
});

Route::get ('barang-add',function(){
    $query =new App\Models\barang();
    $query -> title = "sholawat penghapus maksiat";
    $query -> content = "lorem ipsum sit amet dolor";
    $query -> save();
    return $query;
});

Route::get ('testmodel-delete',function(){
    $query =App\Models\Post::find($id);
    $query -> delete();
    return redirect('/testmodel');
});

Route::get ('barang',function(){
    $query =App\Models\barang::all();
    return  $query;
});

Route::get ('pembeli',function(){
    $query =App\Models\pembeli::all();
    return  $query;
});

Route::get ('pembelian',function(){
    $query =App\Models\pembelian::all();
    return  $query;
});

Route::get ('pesanan',function(){
    $query =App\Models\pesanan::all();
    return  $query;
});

Route::get ('supplier',function(){
    $query =App\Models\supplier::all();
    return  $query;
Route::get ('data-siswa',[MyController::class, 'index']);
Route::get ('posts',[MyController::class,'posting']);
Route::get ('pembeli',[MyController::class,'pembeli']);
Route::get('pembelian/{id}',[MyController::class,'singlepembelian']);
});
//jalankan server laravel -> php artisan serve
//akses localhost :8000/tentang
