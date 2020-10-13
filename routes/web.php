<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DormitoryController;//เรียกแบบกำหนดfunction แบบที่ 1
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

//|--------------------------------------------------------------------------
/*
    Route::get('/customer' , [DormitoryController::class,'index']); //เรียกแบบกำหนดfunction แบบที่ 1
    Route::get('/custo', 'App\Http\Controllers\DormitoryController@index'); //เรียกแบบกำหนดfunction แบบที่ 2
    Route::resource('c', 'DormitoryController');//เรียกแบบresource แบบเก่า ใช่ไม่ได้แล้ว
    Route::resource('cus', 'App\Http\Controllers\DormitoryController');//เรียกแบบresource แบบใหม่
*/
//|--------------------------------------------------------------------------

Route::resource('dormitory', 'App\Http\Controllers\DormitoryController');//เรียกแบบresource แบบใหม่

Route::get('/', function () {
    // return view('welcome');
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

