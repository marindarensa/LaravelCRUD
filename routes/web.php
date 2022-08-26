<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
 
// Route::resource('companies', CompanyCRUDController::class);

Route::get('/', [CompanyCRUDController::class, 'index'])->name('companies.index');
Route::get('/create', [CompanyCRUDController::class, 'create'])->name('companies.create');
Route::get('/edit/{company}', [CompanyCRUDController::class, 'show'])->name('companies.edit');
Route::put('/edit/{company}', [CompanyCRUDController::class, 'update'])->name('companies.update');
Route::delete('/destroy/{company}', [CompanyCRUDController::class, 'destroy'])->name('companies.destroy');
Route::post('/create', [CompanyCRUDController::class, 'store'])->name('companies.store');

// Route::get('/', function () {
//     return view('index');
// });
