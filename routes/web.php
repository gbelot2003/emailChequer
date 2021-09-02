<?php

use App\Http\Controllers\MainControll;
use App\Http\Controllers\PersonalmailController;
use App\Mail\TestMail;
use App\Models\Emailconter;
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

Route::get('/', [MainControll::class, 'index'])->name('main.index');

Route::post('/import', [MainControll::class, 'import'])->name('main.import');

Route::get('/personal', [PersonalmailController::class, 'index'])->name('personal.index');

Route::post('/sendEmail', [PersonalmailController::class, 'send'])->name('personal.send');

Route::get('/confirmation', [PersonalmailController::class, 'confirmation'])->name('personal.confirmation');
