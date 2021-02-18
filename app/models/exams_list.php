<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class exams_list extends Model
{
    protected $fillable = [
        'id', 'examTitle', 'examDescription', 'examDate', 'examEndDate', 'examClasses', 'examMarksheetColumns', 'examAcYear', 'examSchedule'
    ];
}
