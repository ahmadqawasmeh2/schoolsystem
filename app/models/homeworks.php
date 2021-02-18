<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class homeworks extends Model {
    protected $fillable = [
        'id', 'classId','sectionId','subjectId','teacherId'
        ,'homeworkTitle','homeworkDescription','homeworkFile','homeworkDate','homeworkSubmissionDate'
        ,'homeworkEvaluationDate','studentsCompleted'
    ];
}
