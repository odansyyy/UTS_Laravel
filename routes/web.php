<?php

use Illuminate\Support\Facades\Route;
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
    // return "hallo";

//PRAKTIKUM 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     return <h3>"Nama = Odan Syaharta"</h3>,
//     <h3>"NIM = 2321771002"</h3>;
// });

// Route::get('/articles', function () {
//     return <h3>"Nama = Odan Syaharta"</h3>,
//     <h3>"NIM = 2321771002"</h3>;
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/menu',[HomeController::class,'menu']);
Route::get('/chef',[HomeController::class,'chef']);
Route::get('/acara',[HomeController::class,'acara']);
Route::get('/reservasi',[HomeController::class,'reservasi']);
