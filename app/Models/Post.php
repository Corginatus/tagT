<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'lang',
        'industry',
        'type',
        'increase_traffic',
        'problem',
        'solution',
        'about',
        'problems',
        'result'
    ];

    public function image() {
        return $this->belongsTo(Image::class)->select('path');
    }
}
