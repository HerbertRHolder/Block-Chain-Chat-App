<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiveController;
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
// 'res' is a member function of the class HiveController
// This res method is being invoked and the output is sent to the view
Route::get('/hive',[HiveController::class, 'res']);
