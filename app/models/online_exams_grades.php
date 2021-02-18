<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class online_exams_grades extends Model {
    protected $fillable = [
        'id', 'examId','studentId','examQuestionsAnswers','examGrade'
        ,'examDate'

    ];
}
