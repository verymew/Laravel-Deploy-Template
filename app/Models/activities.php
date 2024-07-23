<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume',
        'title',
        'activity_date',
        'image_path',
    ];

}
