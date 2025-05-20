<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    //route for creating new grades controller
    Route::get('grades', [\App\Http\Controllers\GradesController::class, 'index'])->name('grades.index');

    Route::get('evaluation', [\App\Http\Controllers\EvaluationController::class, 'index'])->name('evaluation.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('student', [App\Http\Controllers\StudentController::class, 'index']);
    Route::post('student', [App\Http\Controllers\StudentController::class, 'index']);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    Route::get('student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
    Route::post('student', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::get('student/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
    Route::put('student/{id}/edit', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::get('student/{id}/delete', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.delete');
});
