<?php

use App\Http\Controllers\MainTitleController;
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
//     return view('front/home');
// });

// Route::post('AddMainTitle',[MainTitleController::class,'addMainTitle'])->name('addmaintitle');

Route::get('/', 'MainTitleController@index');
Route::post('AddMainTitle', 'MainTitleController@addMainTitle')->name('addmaintitle');
