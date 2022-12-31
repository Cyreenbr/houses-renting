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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,"index"]);

Route::get('/users',[AdminController::class,"user"]);

Route::get('/CreateHouse',[AdminController::class,"CreateHouse"]);

Route::get('/categoryHouse',[HomeController::class,"CategoryHouse"]);

Route::get('/categoryApartment',[HomeController::class,"CategoryApartment"]);

Route::get('/categoryStudio',[HomeController::class,"CategoryStudio"]);

Route::get('/categoryVilla',[HomeController::class,"CategoryVilla"]);

Route::post('/uploadhouse',[AdminController::class,"upload"]);

Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::get('/ttMaisons',[AdminController::class,"ttMaisons"]);

Route::get('/searchUser',[AdminController::class,"searchUser"]);

Route::get('/deletehouse/{id}',[AdminController::class,"deletehouse"]);

Route::get('/updateview/{id}',[AdminController::class,"updateview"]);

Route::post('/update/{id}',[AdminController::class,"update"]);

Route::get('/searchHouse',[AdminController::class,"searchHouse"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/createAnnonce',[HomeController::class,"CreateAnnonce"]);

Route::get('/interesse/{id}',[HomeController::class,"Interesse"]);

Route::post('/uploadinteresse',[HomeController::class,"upload"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
