<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function lessons()
    {
        return $this->hasMany(CourseLesson::class, 'course_id', 'id');
    }

    public function thumbnails()
    {
        return $this->hasMany(Thumbnail::class, 'item_id', 'id');
    }
}