<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/detail', [FrontEndController::class, 'detail'])->name('detail');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('category', CategoryController::class);
        Route::resource('course', CourseController::class);
        // Route::resource('course.detail', CourseDetailController::class);
        Route::resource('course.lesson', CourseLessonController::class)->shallow()->only([
            'create', 'store', 'edit', 'update', 'destroy'
        ]);
        Route::resource('course.lesson.video', CourseVideoController::class)->shallow()->only([
            'index', 'create', 'store', 'edit', 'update', 'destroy'
        ]);
    });
});
