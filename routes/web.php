<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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
    return view('auth.login');
});

/* Route::get('/clientes', function () {
    return view('clientes.index');
});
Route::get('/clientes/create',[ClienteController::class, 'create']);
*/

Route::resource('clientes',ClienteController::Class)->middleware('auth'); 
Auth::routes();

Route::get('/home', [ClienteController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [ClienteController::class, 'index'])->name('home');
    
});