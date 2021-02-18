<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class class_schedule extends Model
{
    protected $fillable = [
        'id', 'classId', 'sectionId', 'subjectId', 'dayOfWeek', 'teacherId', 'startTime	',
        'endTime'

    ];
}
