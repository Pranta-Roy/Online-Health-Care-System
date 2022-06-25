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

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;



Route::get('index',[websiteController::class,'index']);
Route::get('aboutus',[websiteController::class,'aboutus']);
Route::get('doctors',[websiteController::class,'doctors']);
Route::get('blog',[websiteController::class,'blog']);
Route::get('contact',[websiteController::class,'contact']);


Route::get('registration',[PatientController::class,'registration']);
Route::post('/store-patient',[PatientController::class,'store']);
Route::get('/patient',[PatientController::class,'patient']);
Route::get('/loginpatient',[PatientController::class,'loginpatient']);
Route::post('/loginp',[PatientController::class,'loginP']);

Route::get('admin',[AdminController::class,'admin']);
Route::get('table',[AdminController::class,'table']);
Route::get('/edit-patient/{id}',[AdminController::class,'edit']);
Route::post('/update-patient/{id}',[AdminController::class,'update']);
Route::get('/delete-patient/{id}',[AdminController::class, 'delete']);
Route::get('login',[AdminController::class,'login']);
Route::post('/loginstore',[AdminController::class,'loginstore']);
Route::get('logout',[AdminController::class,'logout']);












