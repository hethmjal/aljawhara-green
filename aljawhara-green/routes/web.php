<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MessagesController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Front\ServicesController as FrontServicesController;

use App\Http\Controllers\Front\ContactusController;
use App\Http\Controllers\Front\FrontController;

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
    return view('welcome');
});







Route::prefix('/dashboard')->middleware(['auth'])->group(function ()
    {
        Route::get('/', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

        Route::get('/services', [ServicesController::class,'index'])->name('services');
        Route::get('/add-service', [ServicesController::class,'add'])->name('service.add');
        Route::post('/store-service', [ServicesController::class,'store'])->name('service.store');
        Route::get('/edit-service/{id}', [ServicesController::class,'edit'])->name('service.edit');
        Route::post('/update-service/{id}', [ServicesController::class,'update'])->name('service.update');
        Route::get('/delete-service/{id}', [ServicesController::class,'destroy'])->name('service.destroy');

        Route::get('/messages', [MessagesController::class,'index'])->name('dashboard.messages');
        Route::get('/show-message/{id}', [MessagesController::class,'show'])->name('dashboard.show-messages');
    }
);

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/aboutus', [FrontController::class,'about'])->name('aboutus');
Route::get('/contactus', [ContactusController::class,'index'])->name('contactus');
Route::get('/services', [FrontServicesController::class,'index'])->name('services');
Route::get('/service-show/{id}', [FrontServicesController::class,'index'])->name('service-show');


require __DIR__.'/auth.php';