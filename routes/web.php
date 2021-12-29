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
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/Change-password', [LoginController::class, 'changePassword'])->name('change_password');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

    // author CRUD
    Route::get('/authors', [AutherController::class, 'index'])->name('authors');
    Route::get('/authors/create', [AutherController::class, 'create'])->name('authors.create');
    Route::get('/authors/edit/{auther}', [AutherController::class, 'edit'])->name('authors.edit');
    Route::post('/authors/update/{id}', [AutherController::class, 'update'])->name('authors.update');
    Route::post('/authors/delete/{id}', [AutherController::class, 'destroy'])->name('authors.destroy');
    Route::post('/authors/create', [AutherController::class, 'store'])->name('authors.store');

    // publisher crud
    Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers');
    Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
    Route::get('/publisher/edit/{publisher}', [PublisherController::class, 'edit'])->name('publisher.edit');
    Route::post('/publisher/update/{id}', [PublisherController::class, 'update'])->name('publisher.update');
    Route::post('/publisher/delete/{id}', [PublisherController::class, 'destroy'])->name('publisher.destroy');
    Route::post('/publisher/create', [PublisherController::class, 'store'])->name('publisher.store');

    // Category CRUD
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');




    // books CRUD
    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('/book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::post('/book/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::post('/book/create', [BookController::class, 'store'])->name('book.store');

    // students CRUD
    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::post('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::post('/student/create', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('student.show');



    Route::get('/book_issue', [BookIssueController::class, 'index'])->name('book_issue');
    Route::get('/reports', [dashboardController::class, 'report'])->name('reports');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});
