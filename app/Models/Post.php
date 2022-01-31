<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'title',
        'language',
        'client',
        'website',
        'description',
        'industry',
        'type',
        'increase_traffic',
        'problem',
        'solution',
        'date',
    ];

    public function image() {
        return $this->belongsTo(Image::class)->select('path');
    }
}
