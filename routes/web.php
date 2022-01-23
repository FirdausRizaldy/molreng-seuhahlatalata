<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_produk;
use App\Http\Controllers\C_customer;
use App\Http\Controllers\C_pemesanan;
use App\Http\Controllers\C_penerimaan;
use App\Http\Controllers\C_pengiriman;

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
    return view('/index');
});


Route::group(['middleware' => ['auth:sanctum', 'verified'],['prefix' => "alumni"]],function(){
    
    Route::get('/dashboard', function () {
        $data = array(
            'menu'=>'dashboard',
            'submenu'=>''
        );
        return view('index', $data);
    })->name('dashboard');


    // PRODUK 
    Route::get('produk',[C_produk::class,'index']);
    Route::get('tambahproduk',[C_produk::class,'create']);
    Route::post('simpanproduk',[C_produk::class,'store']);

    //Customer
    Route::get('customer',[C_customer::class,'index']);
    Route::get('tambahcustomer',[C_customer::class,'create']);
    Route::post('simpancustomer',[C_customer::class,'store']);
    
    //Pemesanan
    Route::get('pemesanan',[C_pemesanan::class,'index']);
    Route::get('tambahpemesanan',[C_pemesanan::class,'create']);
    Route::post('simpanpemesanan',[C_pemesanan::class,'store']);
    
    //Penerimaan
    Route::get('penerimaan',[C_penerimaan::class,'index']);
    Route::get('tambahpenerimaan',[C_penerimaan::class,'create']);
    Route::post('simpanpenerimaan',[C_penerimaan::class,'store']);
    
    //Pengiriman
    Route::get('pengiriman',[C_pengiriman::class,'index']);
    Route::get('tambahpenerimaan',[C_pengiriman::class,'create']);
    Route::post('simpanpenerimaan',[C_pengiriman::class,'store']);


});
