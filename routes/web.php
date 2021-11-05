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
/*
Route::get('/page/{id}',function($id){
    return view('page',['id'=>$id]);
});
*/
Route::get('page/{id}',[App\Http\Controllers\ContMisController::class,'makedata']);
Route::get('kadr',[App\Http\Controllers\OkController::class,'showOkFiles']);
Route::get('pc',[App\Http\Controllers\ListPcController::class,'makepclist'])->middleware('auth');
Route::get('pctable',function(){
    return view('pctable');
})->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
