<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DormitoryController;//เรียกแบบกำหนดfunction แบบที่ 1
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AllController;
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
    Route::resource('dormitory', 'App\Http\Controllers\DormitoryController');//เรียกแบบresource แบบใหม่
*/
//|--------------------------------------------------------------------------

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth','StatusIS'])->group(function(){
    Route::resource('/room', 'App\Http\Controllers\RoomController');
    Route::resource('/customer', 'App\Http\Controllers\CustomerController');
    Route::resource('/booking', 'App\Http\Controllers\BookingController');
    Route::resource('/dormitory', 'App\Http\Controllers\DormitoryController');

    Route::get('/floor/{id}', [AllController::class,'floor']);
    Route::post('/biil/customer/{id}',[AllController::class,'billStore']);
    Route::get('/bill', [AllController::class,'billDashboard']);
    Route::get('/floor/room/{id}:{key}', [AllController::class,'show']);
    Route::get('/bill/edit/{id}', [AllController::class,'edit']);
    Route::post('/biil/update/{id}',[AllController::class,'updateBill']);
    Route::post('/bill/destroy/{id}', [AllController::class,'destroy']);
    Route::get('/bill/show/{id}', [AllController::class,'billShow']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test1', 'App\Http\Controllers\JSController@index');
