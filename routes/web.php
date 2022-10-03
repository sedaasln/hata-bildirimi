<?php
use App\Http\Controllers\ErrorController;
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
    return view('items.list');
});

Route::controller(ErrorController::class)->group(function(){
    Route::get('/list','index')->name('items.list');
    Route::get('/list/detail/{id}','detail')->name('items.detail');
});
