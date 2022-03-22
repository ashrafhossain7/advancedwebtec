<?php
use App\Http\Controllers\pagescontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basecontroller;
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

    
    Route::get ('/login',[basecontroller::class,'login'])->name('login');
    Route::get('admin/homepage',[pagescontroller::class,'adminhome'])->name ('adminhome');
    Route::get ('admin/studentpage',[pagescontroller::class,'studentshome'])->name('studentshome');
    Route::get ('homepage/all',[basecontroller::class,'homepage'])->name('homepage');