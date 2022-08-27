<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/task',[TaskController::class,'index'])->name('task');
Route::post('/add',[TaskController::class,'store'])->name('store');
Route::put('/update/{id}',[TaskController::class,'update'])->name('update');
