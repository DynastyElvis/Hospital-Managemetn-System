<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// USER
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);//slash for root
Route::get('/appointment',[HomeController::class,'appointment']);
Route::get('/my_appointment',[HomeController::class,'my_appointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);




// ADMIN
Route::get('/add_doctor',[AdminController::class,'add']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/show_appointments',[AdminController::class,'show_appointments']);
Route::get('/show_doctors',[AdminController::class,'show_doctors']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);



