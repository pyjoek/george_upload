<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GogController;
use App\Http\Controllers\FileController;

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

Route::get('/', [GogController::class, 'index']);
Route::get('/reg', function(){
    return view('reg');
});
Route::post('/regist', [GogController::class, 'store']);
Route::get('/download/{id}', [FileController::class, 'download']);