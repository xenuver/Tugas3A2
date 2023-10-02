<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/dashboard', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 
    Route::post('/logout', [ProfileController::class, 'logout']);
    
});

Route::get('/riwayat', function () {
    return view('riwayat', [
        "title" => "Riwayat"
    ]);
});
Route::get('/hobby', function () {
    return view('hobby', [
        "title" => "Hobby"
    ]);
});
Route::get('/sosmed', function () {
    return view('sosmed', [
        "title" => "Sosial Media"
    ]);
});
Route::get('/projectdesain', function () {
    return view('desain', [
        "title" => "Desain"
    ]);
});




require __DIR__.'/auth.php';
