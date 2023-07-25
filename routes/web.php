<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Controller::class,'index']);

Route::get('/hello/{name}',function($name){
    echo "hello $name";
});

Route::get('/home',[Controller::class,'index']);
Route::get('/admin', [AdminController::class, 'adminPage'])->middleware('check');
Route::get('/member',[MemberController::class,'memberPage']);