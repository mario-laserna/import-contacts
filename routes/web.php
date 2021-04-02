<?php

use App\Http\Controllers\File\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Import\ImportController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/contacts', [ContactController::class, 'index'])->middleware(['auth'])->name('contact.list');
Route::get('/import', [ImportController::class, 'index'])->middleware(['auth'])->name('import.index');
Route::post('/import', [ImportController::class, 'import'])->middleware(['auth'])->name('import.post');
Route::get('/files', [FileController::class, 'index'])->middleware(['auth'])->name('file.list');
