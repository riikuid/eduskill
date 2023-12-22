<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserCourseController;
use App\Models\UserCourse;
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
Route::get('/{slug}', [FrontendController::class, 'details'])->name('course.details');
Route::post('/{slug}/buy', [FrontendController::class, 'buyCourse'])->name('course.buy');
Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/index', [DashboardController::class, 'index'])->name('index');
    Route::get('/my-courses', [UserCourseController::class, 'index'])->name('my-courses');
    Route::get('/my-courses/{slug}', [UserCourseController::class, 'show'])->name('my-courses.show');

    Route::middleware(['admin'])->group(function () {
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
