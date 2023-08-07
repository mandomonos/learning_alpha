<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'unit_id',
        'name',
        'quiz_id',
        'quiz_name'

    ];
}
