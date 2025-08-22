<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\PouUserController;
use App\Http\Controllers\SliderController;
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

    Route::get('/pou_user', [PouUserController::class, 'index'])->name('pou_user.index');
    Route::get('/pou_user/create', [PouUserController::class, 'create'])->name('pou_user.create');
    Route::post('/pou_user', [PouUserController::class, 'store'])->name('pou_user.store');
    Route::get('/pou_user/{id}/edit', [PouUserController::class, 'edit'])->name('pou_user.edit');
    Route::put('/pou_user/{id}', [PouUserController::class, 'update'])->name('pou_user.update');
    Route::post('/pou_user/{id}/is_public', [PouUserController::class, 'togglePublic'])->name('pou_user.is_public');
    Route::delete('/pou_user/{id}', [PouUserController::class, 'destroy'])->name('pou_user.destroy');


    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('sliders/{id}', [SliderController::class, 'show'])->name('sliders.show');
    Route::get('sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::post('sliders/{id}/is_public', [SliderController::class, 'togglePublic'])->name('sliders.is_public');
    Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');

    Route::get('faculty-assign-paper/{id}', [FacultyController::class, 'assignPaper'])->name('faculty.assign.paper');
    Route::post('faculty-assign-paper-store/{id}', [FacultyController::class, 'assignPaperStore'])->name('faculty.assign.paper.store');
    Route::post('faculty-assign-paper-status/{id}', [FacultyController::class, 'assignPaperStatus'])->name('faculty.assign.paper.status');
});
