<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class, 'index'])->name('admin.login');
Route::post('admin/loginauth', [UserController::class, 'loginauth'])->name('admin.loginauth');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Admin and Superadmin routes
Route::group(['prefix' => 'superadmin', 'as' => 'superadmin.', 'middleware' => ['role:superadmin']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    
    // Admin management routes
    Route::get('user-add', [UserController::class, 'create'])->name('user.add');
    Route::post('user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('user-list', [UserController::class, 'show'])->name('user.list');
    Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user-update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('user-destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('user-status/{id}', [UserController::class, 'status'])->name('user.status');

    // Faculty management routes
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

    Route::get('lecture/add', [LectureController::class, 'create'])->name('lecture.add');
    Route::post('lecture/store', [LectureController::class, 'store'])->name('lecture.store');
    Route::get('lecture/list', [LectureController::class, 'index'])->name('lecture.list');
    Route::get('lecture/edit/{id}', [LectureController::class, 'edit'])->name('lecture.edit');
    Route::post('lecture/update/{id}', [LectureController::class, 'update'])->name('lecture.update');
    Route::get('lecture/destroy/{id}', [LectureController::class, 'destroy'])->name('lecture.destroy');
    Route::post('lecture/status/{id}', [LectureController::class, 'status'])->name('lecture.status');

});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['role:admin']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

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

    Route::get('lecture/add', [LectureController::class, 'create'])->name('lecture.add');
    Route::post('lecture/store', [LectureController::class, 'store'])->name('lecture.store');
    Route::get('lecture/list', [LectureController::class, 'index'])->name('lecture.list');
    Route::get('lecture/edit/{id}', [LectureController::class, 'edit'])->name('lecture.edit');
    Route::post('lecture/update/{id}', [LectureController::class, 'update'])->name('lecture.update');
    Route::get('lecture/destroy/{id}', [LectureController::class, 'destroy'])->name('lecture.destroy');
    Route::post('lecture/status/{id}', [LectureController::class, 'status'])->name('lecture.status');

});

// Faculty routes
Route::group(['prefix' => 'faculty', 'as' => 'faculty.', 'middleware' => ['role:faculty']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    // Additional faculty routes can be added here
});

// Techsupport routes
Route::group(['prefix' => 'techsupport', 'as' => 'techsupport.', 'middleware' => ['role:techsupport']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});


// Esahayta routes
Route::group(['prefix' => 'esahayta', 'as' => 'esahayta.', 'middleware' => ['role:esahayta']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});