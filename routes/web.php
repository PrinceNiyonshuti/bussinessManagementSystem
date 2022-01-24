<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Company;
use App\Models\User;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/view/{company}', [HomeController::class, 'show']);

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [AdminController::class, 'create'])->middleware('auth');

Route::get('/company', [CompanyController::class, 'index'])->middleware('auth');
Route::middleware('auth')->prefix('/company')->group(function () {
    Route::get('/new', [CompanyController::class, 'create']);
    Route::post('/save', [CompanyController::class, 'store']);
    Route::get('/{company}/edit', [CompanyController::class, 'edit']);
    Route::patch('{company}', [CompanyController::class, 'update']);
    Route::delete('{company}', [CompanyController::class, 'destroy']);
});


Route::get('/employee', [EmployeeController::class, 'index'])->middleware('auth');
Route::middleware('auth')->prefix('/employee')->group(function () {
    Route::get('/new', [EmployeeController::class, 'create']);
    Route::post('/save', [EmployeeController::class, 'store']);
    Route::get('/{employee}/edit', [EmployeeController::class, 'edit']);
    Route::patch('{employee}', [EmployeeController::class, 'update']);
    Route::delete('{employee}', [EmployeeController::class, 'destroy']);
});

Route::get('/client', [ClientController::class, 'index'])->middleware('auth');
Route::middleware('auth')->prefix('/client')->group(function () {
    Route::get('/new', [ClientController::class, 'create']);
    Route::post('/save', [ClientController::class, 'store']);
    Route::get('/{client}/edit', [ClientController::class, 'edit']);
    Route::patch('{client}', [ClientController::class, 'update']);
    Route::delete('{client}', [ClientController::class, 'destroy']);
});
