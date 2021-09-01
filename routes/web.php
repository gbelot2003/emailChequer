<?php

use App\Http\Controllers\MainControll;
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

Route::post('/sendEmail', [MainControll::class, 'send'])->name('main.send');

Route::get('/email', function(){
    //return new TestMail();
      //redirect()->back();
});

Route::get('/confirmation', [MainControll::class, 'confirmation'])->name('main.confirmation');
