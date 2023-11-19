<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $courses = Course::with(['category'])->latest()->take(5)->get();
        return view('pages.frontend.index', compact('courses'));
    }

    public function detail()
    {
        return view('pages.frontend.details');
    }

    public function details(Request $request, $slug)
    {
        $product = Course::with(['category', 'lessons'])->where('slug', $slug)->firstOrFail();
        $recommendations = Course::with(['galleries'])->inRandomOrder()->take(4)->get();

        return view('pages.frontend.details', compact('product', 'recommendations'));
    }
}
