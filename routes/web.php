<?php

use App\Http\Controllers\Kategori;
use App\Http\Controllers\Produk;
use App\Http\Controllers\Produkimage;
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
/*homepage*/

route::get('/', [Kategori::class, 'index'])->name('index')->middleware('auth');
route::post('/store', [Kategori::class, 'store'])->middleware('auth');
route::get('/destroyy/{id}', [Kategori::class, 'destroy'])->name('destroy')->middleware('auth');


/*table page*/
Route::get('/table', [Produk::class, 'index']);
route::get('/tambahproduk', [Produk::class, 'create'])->name('store');
route::post('/simpanproduk', [Produk::class, 'store']);
route::get('/edit/{id}', [Produk::class, 'edit'])->middleware('auth');
route::post('/editproduk/{id}', [Produk::class, 'update'])->middleware('auth');
route::get('/destroy/{id}', [Produk::class, 'destroy'])->middleware('auth');

route::post('/loginuser', [Produk::class, 'loginuser'])->name('loginuser');
route::get('/login', [Produk::class,'login'])->name('login');
route::get('/register', [Produk::class, 'register'])->name('register');
route::post('/registeruser', [Produk::class, 'registeruser'])->name('registeruser');
