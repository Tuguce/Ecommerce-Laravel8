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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home',[\App\Http\Controllers\AnasayfaController::class,'index']);
//Route::get('/test/{id}',[\App\Http\Controllers\AnasayfaController::class,'test']);


//admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin')->middleware('auth');

Route::get('/admin/login',[App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
