<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_uz',
        'address_en',
        'address_ru',
        'address_uz',
        'phone',
        'schedule',
        'facebook',
        'instagram',
        'telegram'
    ];
}
