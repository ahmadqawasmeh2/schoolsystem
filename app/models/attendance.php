<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{

    protected $fillable = [
        'id', 'classId', 'subjectId', 'date', 'status', 'in_time', 'out_time',
        'attNotes',

    ];
}
