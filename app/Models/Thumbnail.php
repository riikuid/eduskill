<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thumbnail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'item_id',
        'thumbnail',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'item_id', 'id');
    }
}
