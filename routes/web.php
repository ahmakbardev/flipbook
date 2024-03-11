<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PdfController;
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

Route::get('/', [IndexController::class, 'index'])->name('home.index');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login'); // Display login form
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post'); // Handle login form submission
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
});

// Add more admin routes as needed


Route::get('/detail/{pdf}', [IndexController::class, 'show'])->name('details');

Route::resource('pdfs', PdfController::class);

