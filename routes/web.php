<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegiEmpatController;





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

Route::get('segi-empat/inputSegiEmpat', [SegiEmpatController::class, 'inputSegiEmpat']);
Route::post('segi-empat/hasil', [SegiEmpatController::class, 'hasil']);

Route::get('segi-empat/inputBalok', [SegiEmpatController::class, 'inputBalok']);
Route::post('segi-empat/hasilBalok', [SegiEmpatController::class, 'hasilBalok']);
