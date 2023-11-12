<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Http\Requests\CourseVideoRequest;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseVideo;
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
                    <form class="inline-block" action="" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>

                    </form>';
                })
                ->editColumn('thumbnail', function ($item) {
                    $videoId = Youtube::parseVidFromURL($item->link);

                    $video = Youtube::getVideoInfo($videoId);
                    $thumbnail = $video->snippet->thumbnails->standard->url;

                    return '<img style="width: 160px; height: 90px" src="' . $thumbnail . '"/>';
                })
                ->editColumn('duration', function ($item) {
                    $videoId = Youtube::parseVidFromURL($item->link);
                    $video = Youtube::getVideoInfo($videoId);
                    $duration = $video->contentDetails->duration;

                    $interval = new DateInterval($duration);

                    // Dapatkan waktu dalam format jam:menit:detik
                    $hours = $interval->h;
                    $minutes = $interval->i;
                    $seconds = $interval->s;

                    // Format waktu
                    $formattedDuration = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);

                    return $formattedDuration;
                })
                ->rawColumns(['action', 'thumbnail'])
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
        CourseVideo::create([
            'course_lesson_id' => $lesson->id,
            'title' => $request->title,
            'link' => $request->link,
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
