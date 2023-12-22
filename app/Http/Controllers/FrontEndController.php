<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\CourseVideo;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserCourse;
use DateTime;
use Exception;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Midtrans\Config;
use Midtrans\Snap;

class FrontEndController extends Controller
{
    public function index()
    {
        // $courses = Course::with(['category'])->latest()->take(5)->get();
        $courses = Course::with(['category', 'userCourses'])->get();
        $currentUser = Auth::user();

        // return view('index', compact('courses', 'currentUser'));

        return view('pages.frontend.index', compact('courses', 'currentUser'));
    }


    public function details(Request $request, $slug)
    {
        $course = Course::with(['category', 'lessons'])->where('slug', $slug)->firstOrFail();
        $thumbnail = Storage::url($course->thumbnail);
        // $video = CourseVideo::where('course_lesson_id', $course->lessons->id);
        $lessons = $course->lessons;
        // foreach ($lessons as $lesson) {
        //     dd($lesson->title);
        // }
        // dd(Auth::user()->name);

        return view('pages.frontend.details', compact('course', 'thumbnail'));
    }

    public function buyCourse(Request $request, $slug)
    {
        $course = Course::with(['category', 'lessons'])->where('slug', $slug)->firstOrFail();

        $user = Auth::user();


        // Buat transaksi baru
        Transaction::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'total_price' => $course->price_after, // Sesuaikan dengan struktur harga kelas Anda
            'status' => 'SUCCESS', // Atau status lainnya sesuai kebutuhan
        ]);

        // if ($transaction->status == 'SUCCESS') {
        // }

        // $transaction->save();

        // Tambahkan kelas ke daftar kelas yang dimiliki oleh user
        // $buyer->courses()->attach($course->id);


        return redirect()->route('course.details', $course->slug)->with('success', 'Pembelian kelas berhasil.');
    }
    public function checkout(Request $request)
    {
        $course = Course::find($request->course_id);

        // create transaction
        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'course_id' => $course->id,
            'total_price' => $course->price_after,
        ]);

        $now = new DateTime();
        $orderId = 'EDS' . $transaction->id . $now->format('mdHis');

        // konfigurasi
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // setup variable midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $transaction->total_price
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email
            ],
            'enabled_payments' => ['gopay', 'bank_transfer'],
            'vtweb' => [],
        ];

        // payment procces
        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            $transaction->order_id = $orderId;
            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // =========HAPUS KETIKA SUDAH DIDEPLOY DAN ADA CALLBACK API=======
            UserCourse::create([
                'user_id' => $transaction->user_id,
                'course_id' => $transaction->course_id,
                'order_id' => $transaction->order_id,
            ]);

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function success(Request $request)
    {
        return view('pages.frontend.success');
    }
}
