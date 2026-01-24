<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatestPost extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'image',
        'author',
        'published_at',
        'is_active',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_active' => 'boolean',
    ];
}
