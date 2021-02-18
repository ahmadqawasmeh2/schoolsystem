<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class online_exams_questions extends Model {
    protected $fillable = [
        'id', 'question_text','question_type','question_answers','question_mark	'
        ,'question_image','question_subject','employee_id','is_shared'

    ];
}
