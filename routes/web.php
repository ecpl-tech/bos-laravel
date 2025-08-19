<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/loginauth', [AdminController::class, 'loginauth'])->name('admin.loginauth');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('faculty-add', [FacultyController::class, 'create'])->name('faculty.add');
    Route::post('faculty-store', [FacultyController::class, 'store'])->name('faculty.store');
    Route::get('faculty-list', [FacultyController::class, 'index'])->name('faculty.list');
    Route::get('faculty-edit/{id}', [FacultyController::class, 'edit'])->name('faculty.edit');
    Route::post('faculty-update/{id}', [FacultyController::class, 'update'])->name('faculty.update');
    Route::get('faculty-destroy/{id}', [FacultyController::class, 'destroy'])->name('faculty.destroy');
    Route::post('faculty-status/{id}', [FacultyController::class, 'status'])->name('faculty.status');

    Route::get('faculty-assign-paper/{id}', [FacultyController::class, 'assignPaper'])->name('faculty.assign.paper');
    Route::post('faculty-assign-paper-store/{id}', [FacultyController::class, 'assignPaperStore'])->name('faculty.assign.paper.store');
    Route::post('faculty-assign-paper-status/{id}', [FacultyController::class, 'assignPaperStatus'])->name('faculty.assign.paper.status');
});
