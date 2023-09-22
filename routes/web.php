<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Artisan::call('storage:link');
    return view('welcome');
});
Route::resource('/test',TestController::class);
Route::post('test/send_notification', [TestController::class, 'sendNotification'])->name('test.send_notification');
Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});