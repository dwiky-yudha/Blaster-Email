<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KirimEmailController;


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
    return view('formemail');
});

Route::get('formemail', [KirimEmailController::class, 'index']);
Route::post('kirim', [KirimEmailController::class, 'kirim']);