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
//たぶんjetstream導入時に自動で追加された？
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});