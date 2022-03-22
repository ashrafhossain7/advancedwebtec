<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\coursecontroller;
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

Route::get('/login',[pagescontroller::class,'login'])->name('login');
Route::get('/index',[pagescontroller::class,'index'])->name('index');
Route::get('/register',[pagescontroller::class,'register'])->name('register');
Route::get('/students/create',[studentcontroller::class,'create'])->name('create');
Route::get('/students/get/{id?}',[studentcontroller::class,'get'])->name('get');//now we will only take one element and match it with database and get all information of that id or name
Route::get ('/student/delete',[studentcontroller::class,'delete'])->name('delete');
Route::get('/student/edit',[studentcontroller::class,'edit'])->name('edit');
Route::get('/courses',[coursecontroller::class,'course'])->name('course');
Route::get('/contractus/all',[pagescontroller::class,'contract'])->name('contractus');
Route::get('/students/list',[studentcontroller::class,'list'])->name('list');
Route::post('/login',[pagescontroller::class,'loginsubmit'])->name('login/submit');//creating a post based uri /route to submit the form.here in login we are kuuping the same uri but it is on post and that is on get methode or when we want to see the login page
Route::post('/register',[pagescontroller::class,'registersubmit'])->name('registersubmit');