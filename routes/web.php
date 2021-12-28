<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\AutherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookIssueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/Change-password',[LoginController::class,'changePassword'])->name('change_password');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');
    Route::get('/authors',[AutherController::class,'index'])->name('authers');
    Route::get('/publishers',[PublisherController::class,'index'])->name('publishers');
    Route::get('/categories',[CategoryController::class,'index'])->name('categories');
    Route::get('/books',[BookController::class,'index'])->name('books');
    Route::get('/register-students',[StudentController::class,'index'])->name('reg_students');
    Route::get('/book_issue',[BookIssueController::class,'index'])->name('book_issue');
    Route::get('/reports',[dashboardController::class,'report'])->name('reports');
    Route::get('/settings',[SettingsController::class,'index'])->name('settings');
});



