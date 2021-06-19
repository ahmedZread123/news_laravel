<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\frontsitecontroller;
use App\Http\Controllers\ContactController ;
use App\Http\Controllers\VideoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->middleware('auth')->group(function(){

Route::resource('post' ,PostController::class );
Route::resource('video' ,VideoController::class );
Route::resource('category' ,CategoryController::class );

Route::get('/',[PostController::class , 'home'])->name('Home_admin');
Route::get('/view/{contact}',[ContactController::class , 'view_contact'])->name('view');

});

// authcontroller
Route::get('/login',[authcontroller::class , 'login'])->name('login');
Route::post('/authenticate',[authcontroller::class , 'authenticate'])->name('authenticate');
Route::get('/register',[authcontroller::class , 'register'])->name('register');
Route::post('/do_register',[authcontroller::class , 'do_register'])->name('do_register');
Route::get('/logout',[authcontroller::class , 'logout'])->name('logout');

// frontsitecontroller
Route::get('/',[frontsitecontroller::class , 'show_home'])->name('Home');
Route::get('/blog',[frontsitecontroller::class , 'show_blog'])->name('blog');
Route::get('/post/{post}/single',[frontsitecontroller::class , 'show_single'])->name('single');

// ContactController
Route::get('/contact',[ContactController::class , 'show_contact'])->name('contact');
Route::get('/store_contact',[ContactController::class , 'store_contact'])->name('store_contact');
