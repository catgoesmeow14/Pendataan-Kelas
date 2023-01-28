<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasMahasiswaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\KelasMahasiswa;
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

Route::permanentRedirect('/', '/kelas-mahasiswa');

Route::resources([
    'mahasiswas' =>  MahasiswaController::class,
    'kelas-mahasiswa' => KelasMahasiswaController::class,
    // 'posts' => PostController::class,
]);

Route::resource('kelas', KelasController::class)->parameters([
    'kelas' => 'kelas'
]);
