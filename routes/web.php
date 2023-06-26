<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfilController;
use App\Models\Barang;

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

Route::get('logout-user', function () {
    Auth::logout();
    return redirect('/');
})->name('logout-user');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Normal Users Routes List

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/peminjam', [HomeController::class, 'peminjamHome'])->name('peminjam.dashboard');
    Route::get('/userprofile-edit-peminjam', [UserProfilController::class, 'editProfilePeminjam'])->name('peminjam.userprofile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::resource('barang', BarangController::class);
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    Route::get('/userprofile-edit-admin', [UserProfilController::class, 'editProfileAdmin'])->name('admin.userprofile');
});