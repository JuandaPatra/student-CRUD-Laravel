<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortofolioController;
use App\Models\Portofolio;
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

Route::get('/', function () {
    return view('admin.addPortofolio');
});

Route::get('/admin', [AdminController::class,'show']);
Route::get('/admin/add', [AdminController::class,'add']);
Route::post('/admin/add', [AdminController::class,'insertStudent']);
Route::get('/admin/edit/{student:slug}', [AdminController::class,'editStudentShow']);
Route::post('/admin/edit/{student:slug}', [AdminController::class,'editStudent']);
Route::post('/admin/delete/{student:slug}', [AdminController::class,'deleteStudent']);
Route::get('/admin/student-profile/{student:slug}', [AdminController::class,'studentShow']);


Route::get('/admin/portofolio/{student:slug}', [PortofolioController::class,'show']);
Route::get('/admin/portofolio', [PortofolioController::class,'show']);