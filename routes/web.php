<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ValidateController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\SubmissionController;
use App\Http\Controllers\Admin\SubmissionPeriodController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'roleCheck:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('submission', SubmissionController::class);
    Route::get('submission/{submission}/history', [SubmissionController::class, 'history'])->name('submission.history');
    Route::get('submissions/revisi-ditolak', [SubmissionController::class, 'indexRe'])->name('submission.indexRe');
});

Route::middleware(['auth','roleCheck:admin', ])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('validate', ValidateController::class);
    Route::post('validate/{submission}/store-validation', [ValidateController::class, 'store'])->name('validate.store');
    Route::get('validate/{submission}/detail', [ValidateController::class, 'show'])->name('validate.show');
    Route::patch('validate/{submission}/accept', [ValidateController::class, 'accept'])->name('validate.accept');
    Route::patch('validate/{submission}/reject', [ValidateController::class, 'reject'])->name('validate.reject');
    Route::patch('validate/{submission}/revise', [ValidateController::class, 'revise'])->name('validate.revise');
    Route::get('periods', [SubmissionPeriodController::class, 'index'])->name('periods.index');
    Route::post('periods', [SubmissionPeriodController::class, 'store'])->name('periods.store');
    Route::put('periods/{period}', [SubmissionPeriodController::class, 'update'])->name('periods.update');
    Route::resource('contact', AdminContactController::class);
});
