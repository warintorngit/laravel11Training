<?php

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

use App\Http\Controllers\UserController;

 
Route::get('/greeting', function () {
    return 'Hello World';
});

 
Route::get('/user', [UserController::class, 'index']);

 
Route::get('/user/{id}', [UserController::class, 'show']);