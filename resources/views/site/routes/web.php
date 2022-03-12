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
Route::delete('/delete_phone',[App\Http\Controllers\DelphoneController::class,'delphone'])->middleware('auth');
Route::delete('/delete_org',[App\Http\Controllers\OrgtechController::class,'delOrg'])->middleware('auth');
Route::post('/modal_phone',[App\Http\Controllers\TestController::class,'modalphone'])->middleware('auth');
Route::get('/about', function (){
    return view('about');
});
Route::get('/kadr',[App\Http\Controllers\OkController::class,'showOkFiles']);
Route::get('/apt',[App\Http\Controllers\AptController::class,'showAptFiles']);
Route::get('/pc',[App\Http\Controllers\ListPcController::class,'pcpanel'])->middleware('auth');
Route::get('/org',[App\Http\Controllers\OrgtechController::class,'orgpanel'])->middleware('auth');
Route::post('/orglist',[App\Http\Controllers\OrgtechController::class,'orglist'])->middleware('auth');
Route::get('/cart_list',[App\Http\Controllers\OrgtechController::class,'cart_list'])->middleware('auth');
Route::post('/add_cart',[App\Http\Controllers\OrgtechController::class,'add_cartrige'])->middleware('auth');
Route::get('/model_list',[App\Http\Controllers\OrgtechController::class,'model_list'])->middleware('auth');
Route::post('/orgmodal',[App\Http\Controllers\OrgtechController::class,'addorgModal'])->middleware('auth');
Route::post('/edit_tech',[App\Http\Controllers\OrgtechController::class,'editTech'])->middleware('auth');
Route::post('/disloc_tech',[App\Http\Controllers\OrgtechController::class,'editDisloc'])->middleware('auth');
Route::post('/find_tech',[App\Http\Controllers\OrgtechController::class,'findTech'])->middleware('auth');
Route::post('/show_repair',[App\Http\Controllers\OrgtechController::class,'showRepair'])->middleware('auth');
Route::post('/show_detail_tech',[App\Http\Controllers\OrgtechController::class,'showDetail'])->middleware('auth');
Route::post('/list_tech',[App\Http\Controllers\OrgtechController::class,'showTech'])->middleware('auth');
Route::post('/add_otd',[App\Http\Controllers\TestController::class,'add_otd'])->middleware('auth');
Route::post('/add_phone',[App\Http\Controllers\TestController::class,'add_phone'])->middleware('auth');
Route::post('/listph',[App\Http\Controllers\TestController::class,'find_phones']);
Route::post('/pcl',[App\Http\Controllers\ListPcController::class,'makepclist'])->middleware('auth');
Route::post('/add_fio',[App\Http\Controllers\ListPcController::class,'addfio'])->middleware('auth');
Route::post('/ipl',[App\Http\Controllers\ListPcController::class,'ffip'])->middleware('auth');
Route::get('/move',[App\Http\Controllers\TechMoveController::class,'techmove'])->middleware('auth');
Route::post('/ttable',[App\Http\Controllers\TechMoveController::class,'techtable'])->middleware('auth');
Route::post('/allwork',[App\Http\Controllers\TechMoveController::class,'allwork'])->middleware('auth');
Route::get('/adm',[App\Http\Controllers\AdmController::class,'admpage'])->middleware('auth');
Route::post('/append',[App\Http\Controllers\AdmController::class,'app_data'])->middleware('auth');
Route::get('/test',[App\Http\Controllers\TestController::class,'test']);
Route::get('/phone',[App\Http\Controllers\PhoneController::class,'phone']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

