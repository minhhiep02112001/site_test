<?php

use App\Http\Controllers\ResizeImageController;
use Illuminate\Support\Facades\Cache;
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



Route::group([
    // 'middleware' => ['redirect_301']
], function () {
    Route::get('/',  [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home')->middleware('cacheResponse:300');
    Route::post('/booking',  [App\Http\Controllers\HomeController::class, 'booking'])->name('booking');
    Route::get('/uu-dai-dac-biet', [App\Http\Controllers\HomeController::class, 'page'])->name('page')->where(['slug' => '[a-z0-9-_]+']);
    Route::get('/khuyen-mai', [App\Http\Controllers\HomeController::class, 'khuyenMai']);
    Route::get('/qua-tet', [App\Http\Controllers\HomeController::class, 'quaTet']);
});
