<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\RujukanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    // Data Pasien
    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
    Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/pasien/{id}/update', [PasienController::class, 'update'])->name('pasien.update');
    Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
    Route::get('/pasien/cetakpasien', [PasienController::class, 'cetakpasien'])->name('pasien.cetakpasien');

     // Data Dokter
     Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
     Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokter.create');
     Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokter.store');
     Route::get('/dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
     Route::put('/dokter/{id}/update', [DokterController::class, 'update'])->name('dokter.update');
     Route::delete('/dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

     // Data Obat
     Route::get('/obat', [ObatController::class, 'index'])->name('obat');
     Route::get('/obat/create', [ObatController::class, 'create'])->name('obat.create');
     Route::post('/obat/store', [ObatController::class, 'store'])->name('obat.store');
     Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
     Route::put('/obat/{id}/update', [ObatController::class, 'update'])->name('obat.update');
     Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');

     // Data Poliklinik
     Route::get('/poliklinik', [PoliklinikController::class, 'index'])->name('poliklinik');
     Route::get('/poliklinik/create', [PoliklinikController::class, 'create'])->name('poliklinik.create');
     Route::post('/poliklinik/store', [PoliklinikController::class, 'store'])->name('poliklinik.store');
     Route::get('/poliklinik/{id}/edit', [PoliklinikController::class, 'edit'])->name('poliklinik.edit');
     Route::put('/poliklinik/{id}/update', [PoliklinikController::class, 'update'])->name('poliklinik.update');
     Route::delete('/poliklinik/{id}', [PoliklinikController::class, 'destroy'])->name('poliklinik.destroy');

      // Data Rujukan
      Route::get('/rujukan', [RujukanController::class, 'index'])->name('rujukan');
      Route::get('/rujukan/create', [RujukanController::class, 'create'])->name('rujukan.create');
      Route::post('/rujukan/store', [RujukanController::class, 'store'])->name('rujukan.store');
      Route::get('/rujukan/{id}/edit', [RujukanController::class, 'edit'])->name('rujukan.edit');
      Route::put('/rujukan/{id}/update', [RujukanController::class, 'update'])->name('rujukan.update');
      Route::delete('/rujukan/{id}', [RujukanController::class, 'destroy'])->name('rujukan.destroy');
});
