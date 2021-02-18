<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class online_exams extends Model {
	protected $fillable = [
        'id', 'examTitle','examDescription','examClass','sectionId'
        ,'examTeacher','examSubject','examDate','exAcYear'
        ,'ExamEndDate','examTimeMinutes','examDegreeSuccess','ExamShowGrade'
        ,'random_questions','examQuestion'

    ];
}
