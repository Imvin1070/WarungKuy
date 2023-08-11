<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->middleware('auth');

Route::get('/form',[PageController::class, 'form'])->name('form')->middleware('auth','admin')->middleware('auth.check');
Route::get('/data', [PageController::class, 'barang_data'])->name('data_barang')->middleware('auth')->middleware('auth.check');
Route::get('/page/ubah/{id}',[PageController::class, 'barang_ubah'])->name('ubah_databarang')->middleware('auth')->middleware('auth.check');
Route::get('/page/hapus/{id}',[PageController::class, 'barang_hapus'])->name('hapus_barang')->middleware('auth')->middleware('auth.check');

Route::post('/page/form',[PageController::class, 'barang_simpan'])->name('barang_simpan')->middleware('auth')->middleware('auth.check');
Route::post('/page/perbarui/{id}', [PageController::class, 'barang_perbarui'])->name('perbarui_databarang')->middleware('auth')->middleware('auth.check');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
