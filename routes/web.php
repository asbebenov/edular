<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('idx');
});

Route::get('page/{id}',[App\Http\Controllers\ContMisController::class,'makedata']);
Route::delete('/delete_doc_row',[App\Http\Controllers\DelrowController::class,'deldata'])->middleware('auth');
Route::get('/about', function (){
    return view('about');
});
Route::get('/kadr',[App\Http\Controllers\OkController::class,'showOkFiles']);
Route::get('/apt',[App\Http\Controllers\AptController::class,'showAptFiles']);
Route::get('/pc',[App\Http\Controllers\ListPcController::class,'pcpanel'])->middleware('auth');
Route::post('/pcl',[App\Http\Controllers\ListPcController::class,'makepclist'])->middleware('auth');
Route::post('/ipl',[App\Http\Controllers\ListPcController::class,'ffip'])->middleware('auth');
Route::get('/move',[App\Http\Controllers\TechMoveController::class,'techmove'])->middleware('auth');
Route::post('/ttable',[App\Http\Controllers\TechMoveController::class,'techtable'])->middleware('auth');
Route::post('/allwork',[App\Http\Controllers\TechMoveController::class,'allwork'])->middleware('auth');
Route::get('/adm',[App\Http\Controllers\AdmController::class,'admpage'])->middleware('auth');
Route::post('/append',[App\Http\Controllers\AdmController::class,'app_data'])->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

