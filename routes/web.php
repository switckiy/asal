<?php

use App\Http\Controllers\Aut;
use App\Http\Controllers\Home;
use App\Http\Controllers\dashboard;
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

Route::get('/', [Home::class, 'index']);
Route::get('form', [Home::class, 'form']);
Route::get('faq', [Home::class, 'faq']);

Route::get('login', [Aut::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [Aut::class, 'auth']);
Route::get('reg', [Aut::class, 'reg'])->name('reg')->middleware('guest');
Route::post('reg', [Aut::class, 'regis']);
Route::post('logout', [Aut::class, 'logout']);

Route::get('dashboard', [Dashboard::class, 'index'])->middleware('auth');
Route::get('Topic', [Dashboard::class, 'topic'])->name('Topic')->middleware('auth');
Route::post('addtopic', [Dashboard::class, 'addtopic'])->name('addtopic')->middleware('auth');
Route::delete('deletetopic/{id}', [Dashboard::class, 'deletetopic'])->name('deletetopic')->middleware('auth');
