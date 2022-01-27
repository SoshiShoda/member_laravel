<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', [App\Http\Controllers\MemberController::class, 'index'])->name('index');

// Route::get('ctrl.upload', [CtrlController::class, 'upload']);
// Route::post('ctrl.upload', [CtrlController::class, 'uploaded']);
// getはアップロード画面を取得（upload）するために使い、
// postはアップロード画面で「アップロードする」を押すことで
// 指定の送信先ルート（uploaded）へアップするデータを送信するために使います。

Route::get('/home', [App\Http\Controllers\MemberController::class, 'index'])->name('index');


Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');

Route::get('/stores', function () {
    return view('stores');
})->name('stores');
Route::post('/store/post', [App\Http\Controllers\StoreController::class, 'store'])->name('store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/edits/{id}', [App\Http\Controllers\EditController::class, 'show'])->name('show');
Route::post('/update/{id}', [App\Http\Controllers\EditController::class, 'update'])->name('update');
Route::post('/destroy/{id}', [App\Http\Controllers\EditController::class, 'destroy'])->name('destroy');
