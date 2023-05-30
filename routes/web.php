<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\depositController;
use App\Models;
use Illuminate\Support\Facades\Session;



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
// 2282851079
Route::get('/', [BlogController::class, 'index']);
Route::get('/register', [BlogController::class, 'create']);
Route::POST('/register', [BlogController::class, 'store']);
Route::get('/login', [BlogController::class, 'Login']);
Route::post('/login', [BlogController::class, 'ValidateLoginPage']);
Route::get('/index', [BlogController::class, 'dashboard']);
Route::get('/admin/dashboard', [BlogController::class, 'Admindashboard']);
Route::get('/admin/register', [BlogController::class, 'adminregister']);
Route::get('/admin/login', [BlogController::class, 'adminLogin']);
Route::post('/admin/login', [BlogController::class, 'adminValidateLoginPage']);
Route::post('/admin/register', [BlogController::class, 'adminregisterValidate']);
Route::get('/logout', [BlogController::class, 'logout']);
Route::get('/deposit', [depositController::class, 'index']);
Route::post('/deposited', [depositController::class, 'store']);
Route::get('/index', [depositController::class, 'indexx']);
Route::get('/trasactions', [depositController::class, 'trasactions']);
Route::get('/alltrasactions', [depositController::class, 'alltrasactions']);
// Route::get('/alltrasactions', [depositController::class, 'alltrasactions']);
Route::put('/approve/{id}', [depositController::class, 'show']);
Route::get('/approve/{id}', [depositController::class, 'edit']);
Route::post('/withdraw', [depositController::class, 'withdrawal']);

// Middleware

Route::group(['middleware'=>['Bankcheck']], function(){
    Route::get('/index', [BlogController::class, 'dashboard']);
Route::get('/admin/dashboard', [BlogController::class, 'Admindashboard']);
});