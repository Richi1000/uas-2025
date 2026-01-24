<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'section_key',
        'small_title',
        'title',
        'description',
        'plans',
    ];

    protected $casts = [
        'plans' => 'array',
    ];
}
