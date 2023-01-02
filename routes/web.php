<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\Backend\RegistrationController;
use App\Http\Controllers\LeadManagementController;

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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return redirect()->route('apps.login');
    // return view('welcome');
});

// Auth::routes();

Route::prefix('apps')->group(function () {
    Route::get('login', [LoginController::class, 'login'])->name('apps.login');
    Route::post('process-login', [LoginController::class, 'processLogin'])->name('apps.process.Login');
    Route::post('logout', [LoginController::class, 'logout'])->name('apps.logout');
    Route::get('register',[RegistrationController::class,'register'])->name('apps.register');
    Route::post('register-store',[RegistrationController::class,'store'])->name('register.store');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('apps.dashboard');
    Route::get('/lead-list',[LeadManagementController::class,'index'])->name('lead.list');
    Route::get('/lead-create',[LeadManagementController::class,'create'])->name('lead.create');
    Route::post('/lead-store',[LeadManagementController::class,'store'])->name('lead.store');
});
