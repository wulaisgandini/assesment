<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatkulController;

use Illuminate\Routing\Route as RoutingRoute;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/about', function () {
    return 'Halaman About';
});



Route::get('/about/{search}', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::resource('prodis', ProdiController::class);

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('user', UserController::class);

Route::resource('dosens', DosenController::class);

Route::resource('matkuls', MatkulController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
