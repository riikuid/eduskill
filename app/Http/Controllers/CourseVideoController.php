<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Http\Requests\CourseVideoRequest;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseVideo;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateInterval;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course, CourseLesson $lesson)
    {
        // $videoId = Youtube::parseVidFromURL('https://www.youtube.com/watch?v=QOHOp_Aph68');
        // $video = Youtube::getVideoInfo($videoId);

        // dd($video);

        if (request()->ajax()) {

            $query = CourseVideo::with(['lesson'])->where('course_lesson_id', $lesson->id);
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a class="inline-block border border-indigo-500 bg-indigo-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-indigo-600 hover:border-indigo-600 focus:outline-none focus:shadow-outline"
                    href="' . $item->link . '">
                    Open Link
                    </a>
                    <a class="inline-block border border-gray-400 bg-gray-400 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-600 hover:border-gray-600 focus:outline-none focus:shadow-outline"
                    href="' . route('dashboard.video.edit', ['course' => $item->lesson->course_id, 'lesson' => $item->lesson_course_id, 'video' => $item->id]) . '">
                    Edit
                    </a>
                    <form class="inline-block" action="" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>

                    </form>';
                })
                ->editColumn('url_thumbnail', function ($item) {
                    return '<img style="width: 160px; height: 90px" src="' . $item->url_thumbnail . '"/>';
                })
                ->editColumn('duration', function ($item) {
                    return "$item->duration menit";
                })
                ->rawColumns(['action', 'url_thumbnail'])
                ->make();
        }

        return view('pages.dashboard.lesson.video.index', compact('lesson', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course, CourseLesson $lesson)
    {
        return view('pages.dashboard.lesson.video.create', compact('course', 'lesson'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseVideoRequest $request, Course $course, CourseLesson $lesson)
    {
        $videoId = Youtube::parseVidFromURL($request->link);
        $video = Youtube::getVideoInfo($videoId);

        // Menghitung total menit
        $carbonDuration = CarbonInterval::create($video->contentDetails->duration);
        $duration = intval($carbonDuration->totalMinutes);

        // dd($video);

        CourseVideo::create([
            'course_lesson_id' => $lesson->id,
            'link' => $request->link,
            'title' => $video->snippet->title,
            'duration' => $duration,
            'url_thumbnail' => $video->snippet->thumbnails->high->url,
            'embed_html' => $video->player->embedHtml,
        ]);

        return redirect()->route('dashboard.course.lesson.video.index', ['course' => $course->id, 'lesson' => $lesson->id]);
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
    public function edit(Course $course, CourseLesson $lesson, CourseVideo $video)
    {
        return view('pages.dashboard.lesson.video.edit', compact('course', 'lesson', 'video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseVideoRequest $request, Course $course, CourseLesson $lesson, CourseVideo $video)
    {
        if ($request->link != $video->link) {
            $videoId = Youtube::parseVidFromURL($request->link);
            $video = Youtube::getVideoInfo($videoId);

            // Menghitung total menit
            $carbonDuration = CarbonInterval::create($video->contentDetails->duration);
            $duration = intval($carbonDuration->totalMinutes);

            // dd($video);

            $video->update([
                'course_lesson_id' => $lesson->id,
                'link' => $request->link,
                'title' => $video->snippet->title,
                'duration' => $duration,
                'url_thumbnail' => $video->snippet->thumbnails->high->url,
                'embed_html' => $video->player->embedHtml,
            ]);
        }

        return redirect()->route('dashboard.course.lesson.video.index', ['course' => $video->lesson->course_id, 'lesson' => $video->course_lesson_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseVideo $video)
    {
        $video->delete();
        return redirect()->route('dashboard.lesson.video');
    }
}
