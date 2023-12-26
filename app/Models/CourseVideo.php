<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseVideo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_lesson_id',
        'link',
        'title',
        'duration',
        'url_thumbnail',
        'embed_html',
    ];

    public function lesson()
    {
        return $this->belongsTo(CourseLesson::class, 'course_lesson_id', 'id');
    }
}
