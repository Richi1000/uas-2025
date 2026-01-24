<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'description',
        'image',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];
}
