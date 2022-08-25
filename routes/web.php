<?php

use App\Http\Controllers\cMain;
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

Route::get('/', [cMain::class, 'index']);
Route::get('/edit/{id_tabel}', [cMain::class, 'edit']);
Route::post('/edit/{id_tabel}', [cMain::class, 'update']);
Route::get('/delete/{id}', [cMain::class, 'delete']);
Route::post('/Create', [cMain::class, 'create']);