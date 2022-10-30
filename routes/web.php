<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('post')->middleware(['auth', 'verified'])->group(function () {
        Route::get('index', [ShopController::class, 'index'])->name('post.index');
        Route::get('edit/{id}', [ShopController::class, 'edit'])->name('post.edit');
        Route::post('update/{id}', [ShopController::class, 'update'])->name('post.update');
    });

Route::resource('post',PostController::class);

Route::get('/dashboard/{year?}/{month?}', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__.'/auth.php';
