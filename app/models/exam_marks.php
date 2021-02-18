<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class exam_marks extends Model
{
    protected $fillable = [
        'id', 'examId', 'classId', 'subjectId', 'examMark', 'totalMarks', 'markComments'

    ];
}
