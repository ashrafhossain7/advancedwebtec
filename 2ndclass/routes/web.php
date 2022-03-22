<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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
/*Route::get('/login', function () {
    return view('home/login');//this is the noramal way of routing 
});
*/
//Route::get('/login','PagesController@index');//supportable under laravel 8.2

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get ('/index',[PagesController::class,'index'])->name('index'); //setting the route for connecting loing page with pages controller.. 3rd step for index page.
Route::get ('/register',[PagesController::class,'register'])->name('registration');
Route::get ('/create',[StudentController::class,'create'])->name('create');
Route::get ('students/delete/add/substract',[StudentController::class,'delete'])->name('student/delete');// we need to use studnets/delete or like this kind of thing to get to that page.
Route::get ('/edit',[StudentController::class,'edit'])->name('student/edit');
Route::get ('/get',[StudentController::class,'get'])->name('student/get');
