<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pagecontroller;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(Pagecontroller::class)->group(function () {

    Route::get('reserve/{locale?}', 'reserve')->name('reserve');
    Route::get('menu/{locale?}', 'menu')->name('menu');
    Route::redirect('/menu', 'menu/{locale?}');

    Route::get('menuClean', 'menuClean')->name('menuClean');
    // Route::redirect('/','/en');

    Route::get('/{locale?}', 'home')->name('home');
    Route::redirect('/', '/{locale?}');
    // ---------------------------- POST
    Route::post('/make-reserve', [PageController::class, 'makeReserve'])->name('make-reserve');

});
require __DIR__.'/auth.php';
