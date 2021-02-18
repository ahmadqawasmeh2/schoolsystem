<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    protected $fillable = [
        'id', 'classId', 'sectionId', 'subjectId', 'teacherId', 'AssignTitle', 'AssignDescription',
        'AssignFile', 'AssignDeadLine',

    ];
}
