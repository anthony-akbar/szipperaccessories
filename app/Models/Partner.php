<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_uz',
        'subtitle_en',
        'subtitle_ru',
        'subtitle_uz',
        'image',
        'description_en',
        'description_ru',
        'description_uz'
    ];
}
