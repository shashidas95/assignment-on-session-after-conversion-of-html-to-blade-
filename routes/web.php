<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'Home']);
Route::get('/sessionPut/{email}', [DemoController::class, 'SessionPut']);
Route::get('/sessionPull', [DemoController::class, 'SessionPull']);
Route::get('/sessionGet', [DemoController::class, 'SessionGet']);
Route::get('/sessionForget', [DemoController::class, 'SessionForget']);
Route::get('/sessionFlush', [DemoController::class, 'SessionFlush']);

