<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Course::with('category');

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a class="inline-block border border-blue-500 bg-blue-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 hover:border-blue-800 focus:outline-none focus:shadow-outline"
                    href="' . route('dashboard.course.show', $item->id) . '">
                    Detail
                    </a>

                    <form class="inline-block" action="' . route('dashboard.course.destroy', $item->id) . '" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                    Hapus
                    </button>
                    ' . method_field('delete') . csrf_field() . '
                    </form>';
                })
                ->editColumn('thumbnail', function ($item) {
                    return '<img style="width: 160px; height: 90px" src="' . Storage::url($item->thumbnail) . '"/>';
                })
                ->editColumn('created_at', function ($item) {
                    return date("F Y", strtotime($item->created_at));
                })
                ->editColumn('price', function ($item) {
                    $formattedAmount = 'Rp. ' . number_format($item->price);
                    return $formattedAmount;
                })
                ->rawColumns(['action', 'thumbnail'])
                ->make();
        }

        return view('pages.dashboard.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.dashboard.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $path = $request->file('thumbnail')->store('public/course');

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'thumbnail' => $path,
        ]);

        return redirect()->route('dashboard.course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        if (request()->ajax()) {
            $query = CourseLesson::with(['course'])->where('course_id', $course->id);
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a class="inline-block border border-blue-500 bg-blue-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 hover:border-blue-800 focus:outline-none focus:shadow-outline"
                    href="' . route('dashboard.course.lesson.video.index', ['course' => $item->course_id, 'lesson' => $item->id]) . '">
                    List Video
                    </a>
                    <a class="inline-block border border-gray-400 bg-gray-400 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-600 hover:border-gray-600 focus:outline-none focus:shadow-outline"
                    href="' . route('dashboard.lesson.edit', ['course' => $item->course_id, 'lesson' => $item->id]) . '">
                    Edit
                    </a>
                    <form class="inline-block" action="' . route('dashboard.lesson.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
                })
                ->editColumn('video_count', function ($item) {
                    $count = CourseVideo::with(['lesson'])->where('course_lesson_id', $item->id)->count();
                    return  $count . ' video';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('pages.dashboard.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('public/course');

            $course->update([
                'title' => $course->title,
                'description' => $course->description,
                'category_id' => $course->category_id,
                'price' => $course->price,
                'thumbnail' => $path,
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'category_id' => 'required|integer',
                'price' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $course->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'thumbnail' => $course->thumbnail,
            ]);
        }

        return redirect()->route('dashboard.course.show', $course->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('dashboard.course.index');
    }
}
