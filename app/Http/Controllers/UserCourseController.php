<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $userCourses = UserCourse::with('course')->where('user_id', $user->id)->get();
        // dd($userCourses);

        return view('pages.dashboard.user.courses', compact('userCourses'));
    }

    public function show($slug)
    {
        $user = Auth::user();

        try {
            $course = Course::with('lessons.videos')->where('slug', $slug)->firstOrFail();

            if (UserCourse::where('user_id', $user->id)->where('course_id', $course->id)->exists()) {
                return view('pages.dashboard.user.course.show', compact('course'));
            } else {
                return view('pages.error');
            }
        } catch (ModelNotFoundException $e) {
            // Handle exception, misalnya redirect ke halaman 404
            return abort(404);
        }
    }
}
