<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//     return view('home');
// });

// route::get('/', [HomeController:: class,'index']);
route::get('requirement', [HomeController:: class,'requirement']);
Route::get('/',[HomeController:: class , 'home'])->name('home');

route::get('eligibility', [HomeController:: class,'eligibility']);
route::get('eligible', [HomeController:: class,'eligible']);
route::get('membership_policy', [HomeController:: class,'membership_policy'])->name('membership_policy');
route::get('registration',[HomeController::class, 'registration'])->name('registration');
route::get('application', [HomeController:: class,'application'])->name('application');
