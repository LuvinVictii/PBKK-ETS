<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicalRecordController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/form-rekam-medis', 'MedicalRecordController@index')->middleware('medical_record');
Route::get('/form-rekam-medis', [MedicalRecordController::class, 'index']);

Route::get('/medical-records/create', [MedicalRecordController::class, 'create'])->name('medical-records.create');
// Route::get('/medical-records/create', 'MedicalRecordController@create');
// Route::get('/medical-records/create', [MedicalRecordController::class, 'create']);
Route::post('/medical-records', [MedicalRecordController::class, 'store'])->name('medical-records.store');

require __DIR__.'/auth.php';
