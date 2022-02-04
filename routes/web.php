<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardControlller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentAjaxControler;



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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
Route::get('/',[HomeController::class,'shoPost']);
Route::get('/card',[CardControlller::class,'card']);

Route::get('/student',[StudentController::class,'index'])->name('index');
Route::post('/student',[StudentController::class,'store'])->name('store');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/student/edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('/student/delete/{id}',[StudentController::class,'destroy'])->name('delete');

Route::get('studentAjax',[StudentAjaxControler::class,'index']);
Route::post('addStudent',[StudentAjaxControler::class,'store']);


Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/post',[postController::class,'index'])->name('postIndex');
    Route::post('/post',[postController::class,'create'])->name('postCreate');
    Route::get('/post/edit/{id}',[postController::class,'edit'])->name('postEdit');
    Route::put('/post/edit/{id}',[postController::class,'update'])->name('postUpdate');
    Route::get('/post/delete/{id}',[postController::class,'destroy'])->name('postDestroy');

});

require __DIR__.'/auth.php';
