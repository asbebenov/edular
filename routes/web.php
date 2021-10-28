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

Route::get('/', function () {
    return view('start');
});
/*
Route::get('/page/{id}',function($id){
    return view('page',['id'=>$id]);
});
*/
Route::get('page/{id}',[App\Http\Controllers\ContMisController::class,'makedata']);
