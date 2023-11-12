<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        $categories = Category::all();
        return view('pages.dashboard.lesson.create', compact('course', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        CourseLesson::create([
            'title' => $request->title,
            'course_id' => $course->id,
        ]);
        return redirect()->route('dashboard.course.show', $course->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseLesson $lesson)
    {
        $course = Course::with('lessons')->where('course_id', $lesson->course_id);
        // $lesson = $lesson->with(['course']);
        return view('pages.dashboard.lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course, CourseLesson $lesson)
    {
        $data = $request->all();
        $lesson->update($data);

        return redirect()->route('dashboard.course.show', $lesson->course_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('dashboard.course.show', $lesson->course_id);
    }
}
