<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $fillable = [
        'id', 'className', 'classTeacher', 'classAcademicYear', 'classSubjects', 'dormitoryId'

    ];
}
