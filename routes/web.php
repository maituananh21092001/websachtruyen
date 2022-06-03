<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TheLoaiController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/',[IndexController::class,'home']);
Route::get('/danh-muc/{slug}',[IndexController::class,'danhmuc']);
Route::get('/xem-truyen/{slug}',[IndexController::class,'xemtruyen']);
Route::get('/xem-chapter/{slug}',[IndexController::class,'xemchapter']);
Route::get('/the-loai/{slug}',[IndexController::class,'theloai']);
Route::post('/tim-kiem',[IndexController::class,'timkiem']);
Route::post('/timkiem-ajax',[IndexController::class,'timkiem_ajax']);
Route::post('/truyennoibat',[TruyenController::class,'truyennoibat']);
Route::post('/tabs-danhmuc',[IndexController::class,'tabs_danhmuc']);
Route::get('kytu/{kytu}',[IndexController::class,'kytu']);
// Route::get('/custom_error',function(){
//     return Artisan::call('php artisan vendor:publish --tag=laravel-errors');
// });
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/chapter', ChapterController::class);
Route::resource('/theloai', TheLoaiController::class);


